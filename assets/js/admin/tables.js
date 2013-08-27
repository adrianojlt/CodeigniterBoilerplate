$(document).ready(function () {
    $('#tableContainer').jtable({
        title: 'jtable',
        actions: {
            //listAction: window.ajaxUrl + '/Tables/tmp',
            listAction: 'http://localhost/www/CI_Template/index.php/admin/Tables/tmp',
            createAction: '/CreatePerson',
            updateAction: '/UpdatePerson',
            deleteAction: '/DeletePerson'
        },
        fields: {
            PersonId: {
                key: true,
                list: false
            },
            Name: {
                title: 'Author Name',
                width: '40%'
            },
            Age: {
                title: 'Age',
                width: '20%'
            },
            RecordDate: {
                title: 'Record date',
                width: '30%',
                type: 'date',
                create: false,
                edit: false
            }
        }
    });


    $('#tableContainer').jtable('load');
});
