

// Initialization modal TW Elements
import {
    Modal,
    Ripple,
    initTE,
} from "tw-elements";

initTE({ Modal, Ripple });

import Dropzone from "dropzone";

Dropzone.autoDiscover = false;

const dropzone = new Dropzone("#dropzone", {
    dictDefaultMessage: "Sube aquí tu imagen",
    acceptedFiles: ".png,.jpg,.gif,.bmp,.jpeg",
    addRemoveLinks: true,
    dictRemoveFile: "Eliminar",
    maxFiles: 1,
    uploadMultiple: false,

    init: function () {
        if (document.querySelector('[name="image_project"]').value.trim()) {
            const imagePublicada= {};
            imagePublicada.size = 1234;
            imagePublicada.name = document.querySelector('[name="image_project"]').value;

            this.options.addedfile.call(this, imagePublicada);
            this.options.thumbnail.call(this, imagePublicada, `/projects_img/${imagePublicada.name}`);
            imagePublicada.previewElement.classList.add('dz-success', 'dz-complete');
        }
    }
});

//Eventos Dropzone

dropzone.on('sending', function (file, xhr, formData) {

});

dropzone.on('success', function (file, response) {
    console.log(response);
    document.querySelector('[name="image_project"]').value = response.image_project;

});

dropzone.on('error', function (file, response) {

});

//Eliminar la imagen
dropzone.on('removedfile', function (file, response) {

    document.querySelector('[name="image_project"]').value = "";

});
