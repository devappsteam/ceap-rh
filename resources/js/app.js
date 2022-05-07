require('./bootstrap');
require('bootstrap');
require('slick-slider');
require('smartwizard');
require('jquery-mask-plugin');
require('bootstrap-select');
require('ajax-bootstrap-select');
require('ajax-bootstrap-select/dist/js/locale/ajax-bootstrap-select.pt-BR');
require('jquery-validation');
require('jquery-validation/dist/additional-methods');
require('jquery-validation/dist/localization/messages_pt_BR');

const { Dropzone } = require("dropzone");

(function ($) {
    'use strict';

    $(function () {
        $.fn.selectpicker.Constructor.BootstrapVersion = '4';

        jQuery.validator.setDefaults({
            errorElement: 'span',
            errorPlacement: function (error, element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight: function (element, errorClass, validClass) {
                $(element).addClass('is-invalid');
                if ($(element).next('.dropdown-toggle')) {
                    $(element).next('.dropdown-toggle').addClass('is-invalid');
                }
            },
            unhighlight: function (element, errorClass, validClass) {
                $(element).removeClass('is-invalid');
                $(element).next('.dropdown-toggle').removeClass('is-invalid');
            }
        });

        // Variables

        let form_candidate = $('#form_candidate');

        // Inicialize Form

        // Validate form
        form_candidate.validate({
            rules: {
                cpf: {
                    cpfBR: true
                }
            },
            ignore: ""
        });

        // Selectpicker
        appSelectPicker($('body').find('.selectpicker'));

        $('.carousel').carousel();

        $('.clients__slider').slick({
            dots: false,
            infinite: true,
            speed: 3000,
            slidesToShow: 4,
            slidesToScroll: 4,
            lazyLoad: 'ondemand',
            autoplay: true,
            autoplaySpeed: 5000,
            arrows: false,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 4,
                        slidesToScroll: 4,
                        infinite: true,
                        dots: false
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        centerMode: true
                    }
                }
            ]
        });

        $('#candidate_wizard').smartWizard({
            selected: 0,
            theme: 'dots',
            justified: true,
            autoAdjustHeight: false,
            backButtonSupport: true,
            enableURLhash: false,
            lang: {
                next: 'Próximo',
                previous: 'Anterior',
            },
            toolbarSettings: {
                toolbarExtraButtons: [
                    $('<button type="submit" id="btn_submit" class="btn btn-success" disabled="disabled">Salvar</button>')
                ]
            }
        }).on('leaveStep', function (e, anchorObject, stepNumber, stepDirection) {
            return form_candidate.valid();
        }).on("stepContent", function (e, anchorObject, stepIndex, stepDirection) {
            $('#btn_submit').prop('disabled', stepIndex !== 6);
        });

        $('#foreign').on('change', function (e) {
            if ($(this).is(':checked')) {
                $('#hometown').val("");
                $('#hometown').prop("disabled", true);
                $('#hometown').selectpicker("refresh");
            } else {
                $('#hometown').prop("disabled", false);
                $('#hometown').selectpicker("refresh");
            }
        });

        $('#personal_presentation').on('keyup', function () {
            let limit = parseInt($(this).attr('maxlength'));
            let current = parseInt($(this).val().length);
            let rest = (limit - current);

            $('#personal_presentation_info').text(rest);

            if (rest == 0) {
                $('#personal_presentation_info').parent('p').addClass('text-danger font-weight-bold');
            } else {
                $('#personal_presentation_info').parent('p').removeClass('text-danger font-weight-bold');
            }

        });

        /************************************
         *  Mask Inputs
         ************************************/

        // CPF
        $('#cpf').mask('000.000.000-00', { reverse: true });

        // Phone
        var maskPhones = function (val) {
            return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
        },
            spOptions = {
                onKeyPress: function (val, e, field, options) {
                    field.mask(maskPhones.apply({}, arguments), options);
                }
            };

        $('#contact_number').mask(maskPhones, spOptions);


        // Postcode
        $('#postcode').mask('00000-000');

        // Interest Price
        $('#interest_price').mask("#.##0,00", { reverse: true });

        /************************************
        *  Uploads
        ************************************/
        Dropzone.autoDiscover = false;
        const photos_upload = new Dropzone("#photos_upload", {
            url: "/file/send",
            params: function (files, xhr, chunk) {
                return {
                    _token: $('meta[name="csrf-token"]').attr('content'),
                    type: 'candidate'
                };
            },
            maxFiles: 10,
            uploadMultiple: false,
            acceptedFiles: ".jpeg,.jpg,.png",
            addRemoveLinks: false,
            init: function () {
                this.on("maxfilesexceeded", function (file) {
                    this.removeFile(file);
                    alert('Limite de arquivos atingido.');
                });
                this.on('success', function (file, response) {
                    if (response.status) {
                        $(file.previewElement).append(`
                            <input type="hidden" name="photos[]" value="${response.uuid}">
                        `);
                    }
                });
            }
        });

        // Searchs
        init_ajax_search('#hometown', {
            city: '{{{q}}}'
        }, "/city/search");

        init_ajax_search('#interest_job',
            {
                job: '{{{q}}}'
            }, "/job/search");

        /**
         * Tables
         */

        // Add Contact
        $('#btn_add_contact').on('click', function (e) {
            e.preventDefault();

            let uuid = uuidv4();
            let phone = $('#contact_number').val();
            let type = $('#contact_type').selectpicker('val');

            if (phone.length == 0 || type == "") {
                alert('Telefone e tipo são obrigatórios.')
                return;
            }

            $('#contact_empty').hide();

            let type_text = '';
            switch (parseInt(type)) {
                case 1:
                default:
                    type_text = 'Comercial';
                    break;
                case 2:
                    type_text = 'Pessoal';
                    break;
                case 3:
                    type_text = 'Residencial';
                    break;
            }

            $('#contact_table tbody').append(`
                <tr id="${uuid}">
                    <td>
                    ${phone}
                    <input type="hidden" name="contact[${uuid}][phone]" value="${phone}">
                    </td>
                    <td>
                    ${type_text}
                    <input type="hidden" name="contact[${uuid}][type]" value="${type}">
                    </td>
                    <td>
                        <button type="button" class="btn btn-danger btn-sm btn_remove_contact" data-uuid="${uuid}">Remover</button>
                    </td>
                </tr>
            `);

            $('#contact_number').val("");
            $('#contact_type').val("").selectpicker("refresh");

        });

        $(document).on('click', '.btn_remove_contact', function (event) {
            event.preventDefault();
            let uuid = $(this).data('uuid');
            $('#contact_table').find(`#${uuid}`).remove();

            if ($('#contact_table tbody').find('tr').not('#contact_empty').length == 0) {
                $('#contact_empty').show();
            }
        });

        /**************************
         *       Interests
         *************************/

        $('#btn_interest_add').on('click', function (event) {
            event.preventDefault();

            let job = $('#interest_job').selectpicker('val');
            let job_text = $('#interest_job option:selected').text();
            let type = $('input[name="interest_type"]:checked').val();
            let price = $('#interest_price').val();
            let uuid = uuidv4();
            let type_text = '';

            $('#interest_empty').hide();

            switch (type) {
                case 'month':
                default:
                    type_text = 'Mês';
                    break;
                case 'hour':
                    type_text = 'Hora';
                    break;
            }

            $('#interest_table tbody').append(`
                <tr id="${uuid}">
                    <td>
                        ${job_text}
                        <input type="hidden" name="interest[${uuid}][job]" value="${job}">
                    </td>
                    <td>
                        ${price}
                        <input type="hidden" name="interest[${uuid}][price]" value="${price}">
                    </td>
                    <td>
                        ${type_text}
                        <input type="hidden" name="interest[${uuid}][type]" value="${type}">
                    </td>
                    <td>
                        <button type="button" class="btn btn-danger btn-sm btn_remove_interest" data-uuid="${uuid}">Remover</button>
                    </td>
                </tr>
            `);

            $('#interest_price').val("");
            $('#interest_job').val("").selectpicker("refresh");

        });

        $(document).on('click', '.btn_remove_interest', function (event) {
            event.preventDefault();
            let uuid = $(this).data('uuid');
            $('#interest_table').find(`#${uuid}`).remove();

            if ($('#interest_table tbody').find('tr').not('#interest_empty').length == 0) {
                $('#interest_empty').show();
            }
        });

        /***********************
         *      Experience
         ***********************/
        init_ajax_search('#experience_job',
            {
                job: '{{{q}}}'
            }, "/job/search");

        $('#btn_experience_add').on('click', function (event) {
            event.preventDefault();

            let uuid = uuidv4();
            let job = $('#experience_job').selectpicker('val');
            let job_text = $('#experience_job option:selected').text();
            let start = $('#experience_start').val();
            let end = $('#experience_end').val();
            let institution = $('#experience_institution').val();
            let activities = $('#experience_activities').val();
            let is_public = $('input[name="experience_institution_public"]:checked').val();
            let is_public_text = '';

            $('#experience_empty').hide();

            switch (is_public) {
                case 'no':
                default:
                    is_public_text = 'Não';
                    break;
                case 'yes':
                    is_public_text = 'Sim';
                    break;
            }

            $('#experience_table tbody').append(`
                <tr id="${uuid}">
                    <td>
                        <p class="text-truncate mb-0">${job_text}</p>
                        <input type="hidden" name="experience[${uuid}][job]" value="${job}">
                    </td>
                    <td>
                        ${new Date(start).toLocaleDateString('pt-BR', { timeZone: 'UTC' })}
                        <input type="hidden" name="experience[${uuid}][start]" value="${start}">
                    </td>
                    <td>
                        ${new Date(end).toLocaleDateString('pt-BR', { timeZone: 'UTC' })}
                        <input type="hidden" name="experience[${uuid}][end]" value="${end}">
                    </td>
                    <td>
                        <p class="text-truncate mb-0">${institution}</p>
                        <input type="hidden" name="experience[${uuid}][institution]" value="${institution}">
                    </td>
                    <td>
                        <p class="text-truncate mb-0">${activities}</p>
                        <input type="hidden" name="experience[${uuid}][activities]" value="${activities}">
                    </td>
                    <td>
                        ${is_public_text}
                        <input type="hidden" name="experience[${uuid}][is_public]" value="${is_public}">
                    </td>
                    <td>
                        <button type="button" class="btn btn-danger btn-sm btn_remove_experience" data-uuid="${uuid}">Remover</button>
                    </td>
                </tr>
            `);

            $('#experience_job').val("").selectpicker("refresh");
            $('#experience_start').val("");
            $('#experience_end').val("");
            $('#experience_institution').val("");
            $('#experience_activities').val("");
        });

        $(document).on('click', '.btn_remove_experience', function (event) {
            event.preventDefault();
            let uuid = $(this).data('uuid');
            $('#experience_table').find(`#${uuid}`).remove();

            if ($('#experience_table tbody').find('tr').not('#experience_empty').length == 0) {
                $('#experience_empty').show();
            }
        });

        /***********************
         *      Formation
         ***********************/
        $('#btn_formation_add').on('click', function (event) {
            event.preventDefault();

            let uuid = uuidv4();
            let course = $('#formation_course').val();
            let type = $('#formation_type').selectpicker('val');
            let type_text = $('#formation_type option:selected').text();
            let institution = $('#formation_institution').val();
            let period = $('#formation_period').val();
            let conclusion = $('#formation_conclusion').val();

            $('#formation_empty').hide();

            $('#formation_table tbody').append(`
                <tr id="${uuid}">
                    <td>
                        <p class="text-truncate mb-0">${course}</p>
                        <input type="hidden" name="formation[${uuid}][course]" value="${course}">
                    </td>
                    <td>
                        <p class="text-truncate mb-0">${type_text}</p>
                        <input type="hidden" name="formation[${uuid}][type]" value="${type}">
                    </td>
                    <td>
                        <p class="text-truncate mb-0">${institution}</p>
                        <input type="hidden" name="formation[${uuid}][institution]" value="${institution}">
                    </td>
                    <td>
                        ${period}
                        <input type="hidden" name="formation[${uuid}][period]" value="${period}">
                    </td>
                    <td>
                        ${conclusion}
                        <input type="hidden" name="formation[${uuid}][conclusion]" value="${conclusion}">
                    </td>
                    <td>
                        <button type="button" class="btn btn-danger btn-sm btn_remove_formation" data-uuid="${uuid}">Remover</button>
                    </td>
                </tr>
            `);

            $('#formation_type').val("").selectpicker("refresh");
            $('#formation_course').val("");
            $('#formation_institution').val("");
            $('#formation_period').val("");
            $('#formation_conclusion').val("");

        });

        $(document).on('click', '.btn_remove_formation', function (event) {
            event.preventDefault();
            let uuid = $(this).data('uuid');
            $('#formation_table').find(`#${uuid}`).remove();

            if ($('#formation_table tbody').find('tr').not('#formation_empty').length == 0) {
                $('#formation_empty').show();
            }
        });

        /**********************
         *      Posgraduate
         **********************/
        $('#btn_postgraduate_add').on('click', function (event) {
            event.preventDefault();

            let uuid = uuidv4();
            let course = $('#postgraduate_name').val();
            let type = $('#postgraduate_type').val();
            let type_text = $('#postgraduate_type option:selected').text();
            let institution = $('#postgraduate_institution').val();
            let comment = $('#postgraduate_comment').val();
            let conclusion = $('#postgraduate_conclusion').val();

            $('#posgraduate_empty').hide();

            $('#posgraduate_table tbody').append(`
                <tr id="${uuid}">
                    <td>
                        <p class="text-truncate mb-0">${course}</p>
                        <input type="hidden" name="posgraduate[${uuid}][course]" value="${course}">
                    </td>
                    <td>
                        ${type_text}
                        <input type="hidden" name="posgraduate[${uuid}][type]" value="${type}">
                    </td>
                    <td>
                        <p class="text-truncate mb-0">${institution}</p>
                        <input type="hidden" name="posgraduate[${uuid}][institution]" value="${institution}">
                    </td>
                    <td>
                        ${conclusion}
                        <input type="hidden" name="posgraduate[${uuid}][conclusion]" value="${conclusion}">
                    </td>
                    <td>
                        <p class="text-truncate mb-0">${comment}</p>
                        <input type="hidden" name="posgraduate[${uuid}][comment]" value="${comment}">
                    </td>
                    <td>
                        <button type="button" class="btn btn-danger btn-sm btn_remove_posgraduate" data-uuid="${uuid}">Remover</button>
                    </td>
                </tr>
            `);

            $('#postgraduate_name').val("");
            $('#postgraduate_type').val("");
            $('#postgraduate_institution').val("");
            $('#postgraduate_comment').val("");
            $('#postgraduate_conclusion').val("");

        });

        $(document).on('click', '.btn_remove_posgraduate', function (event) {
            event.preventDefault();
            let uuid = $(this).data('uuid');
            $('#posgraduate_table').find(`#${uuid}`).remove();

            if ($('#posgraduate_table tbody').find('tr').not('#posgraduate_empty').length == 0) {
                $('#posgraduate_empty').show();
            }
        });

        /**********************
         *      Couses
         **********************/
        $('#btn_course_add').on('click', function (event) {
            event.preventDefault();

            let uuid = uuidv4();
            let course = $('#course_name').val();
            let type = $('#course_type').val();
            let type_text = $('#course_type option:selected').text();
            let institution = $('#course_institution').val();
            let comment = $('#course_comment').val();
            let conclusion = $('#course_conclusion').val();

            $('#course_empty').hide();

            $('#course_table tbody').append(`
                <tr id="${uuid}">
                    <td>
                        <p class="text-truncate mb-0">${course}</p>
                        <input type="hidden" name="course[${uuid}][course]" value="${course}">
                    </td>
                    <td>
                        ${type_text}
                        <input type="hidden" name="course[${uuid}][type]" value="${type}">
                    </td>
                    <td>
                        <p class="text-truncate mb-0">${institution}</p>
                        <input type="hidden" name="course[${uuid}][institution]" value="${institution}">
                    </td>
                    <td>
                        ${conclusion}
                        <input type="hidden" name="course[${uuid}][conclusion]" value="${conclusion}">
                    </td>
                    <td>
                        <p class="text-truncate mb-0">${comment}</p>
                        <input type="hidden" name="course[${uuid}][comment]" value="${comment}">
                    </td>
                    <td>
                        <button type="button" class="btn btn-danger btn-sm btn_remove_course" data-uuid="${uuid}">Remover</button>
                    </td>
                </tr>
            `);

            $('#course_name').val("");
            $('#course_type').val("");
            $('#course_institution').val("");
            $('#course_comment').val("");
            $('#course_conclusion').val("");

        });

        $(document).on('click', '.btn_remove_course', function (event) {
            event.preventDefault();
            let uuid = $(this).data('uuid');
            $('#course_table').find(`#${uuid}`).remove();

            if ($('#course_table tbody').find('tr').not('#course_empty').length == 0) {
                $('#course_empty').show();
            }
        });

        /**********************
         *      Languages
         **********************/
        init_ajax_search('#language_name',
            {
                language: '{{{q}}}'
            }, "/language/search");

        $('#btn_language_add').on('click', function (event) {
            event.preventDefault();

            let uuid = uuidv4();
            let language = $('#language_name').selectpicker('val');
            let language_text = $('#language_name option:selected').text();
            let level = $('#language_level').val();
            let level_text = $('#language_level option:selected').text();

            $('#language_empty').hide();
            $('#language_table tbody').append(`
                <tr id="${uuid}">
                    <td>
                        <p class="text-truncate mb-0">${language_text}</p>
                        <input type="hidden" name="language[${uuid}][uuid]" value="${language}">
                    </td>
                    <td>
                        ${level_text}
                        <input type="hidden" name="language[${uuid}][level]" value="${level}">
                    </td>
                    <td>
                        <button type="button" class="btn btn-danger btn-sm btn_remove_language" data-uuid="${uuid}">Remover</button>
                    </td>
                </tr>
            `);

            $('#language_name').val("").selectpicker('refresh');
            $('#language_level').val("");

        });

        $(document).on('click', '.btn_remove_language', function (event) {
            event.preventDefault();
            let uuid = $(this).data('uuid');
            $('#language_table').find(`#${uuid}`).remove();

            if ($('#language_table tbody').find('tr').not('#language_empty').length == 0) {
                $('#language_empty').show();
            }
        });


        /**********************
         *      Postcode
         **********************/
        $("#postcode").on('keyup', function () {
            if ($(this).val().length == 9) {
                var cep = $(this).val().replace(/\D/g, '');
                if (cep != "") {
                    var validacep = /^[0-9]{8}$/;
                    if (validacep.test(cep)) {

                        $("#address").val("...");
                        $("#district").val("...");
                        $("#city").val("...");
                        $("#state").val("...");

                        $.getJSON("https://viacep.com.br/ws/" + cep + "/json/?callback=?", function (dados) {

                            if (!("erro" in dados)) {
                                $("#address").val(dados.logradouro);
                                $("#district").val(dados.bairro);
                                $("#city").val(dados.localidade);
                                $("#state").val(dados.uf);

                            }
                            else {
                                clear_form_cep();
                            }
                        });
                    }
                    else {

                        clear_form_cep();
                    }
                }
                else {
                    clear_form_cep();
                }
            }
        });

    });

})(jQuery);

function uuidv4() {
    return ([1e7] + -1e3 + -4e3 + -8e3 + -1e11).replace(/[018]/g, c =>
        (c ^ crypto.getRandomValues(new Uint8Array(1))[0] & 15 >> c / 4).toString(16)
    );
}


// Init bootstrap select picker
function appSelectPicker(element) {

    if (typeof (element) == 'undefined') {
        element = $("body").find('select.selectpicker');
    }

    if (element.length) {
        element.selectpicker({
            showSubtext: true
        });
    }
}

function init_ajax_search(selector, server_data, url) {
    var ajaxSelector = $('body').find(selector);

    if (ajaxSelector.length) {
        var options = {
            ajax: {
                url: (typeof (url) == "undefined" ? "/" : url),
                data: function () {
                    let data = {};
                    data._token = $('meta[name="csrf-token"]').attr('content');
                    if (typeof (server_data) != 'undefined') {
                        jQuery.extend(data, server_data);
                    }
                    return data;
                }
            },
            locale: {
                emptyTitle: 'Selecione...',
                statusInitialized: 'Comece a digitar, para pesquisar',
                statusSearching: 'Buscando...',
                statusNoResults: 'Nenhum resultado encontrado',
                searchPlaceholder: 'Escreva, para pesquisar...',
                currentlySelected: 'Selecionado atualmente'
            },
            requestDelay: 500,
            cache: false,
            preprocessData: function (processData) {
                if (processData.status) {
                    var bs_data = [];
                    var len = processData.data.length;
                    for (var i = 0; i < len; i++) {
                        var tmp_data = {
                            'value': processData.data[i].uuid,
                            'text': processData.data[i].name,
                        };
                        if (processData.data[i].subtext) {
                            tmp_data.data = {
                                subtext: processData.data[i].subtext
                            };
                        }
                        bs_data.push(tmp_data);
                    }
                    return bs_data;
                }
                return [];
            },
            preserveSelectedPosition: 'after',
            preserveSelected: true
        };
        if (ajaxSelector.data('empty-title')) {
            options.locale.emptyTitle = ajaxSelector.data('empty-title');
        }
        ajaxSelector.selectpicker().ajaxSelectPicker(options);
    }
}


function clear_form_cep() {
    $("#address").val("");
    $("#district").val("");
    $("#city").val("");
    $("#state").val("");

    $("#address").trigger("reset");
    $("#district").trigger("reset");
    $("#city").trigger("reset");
    $("#state").trigger("reset");
}
