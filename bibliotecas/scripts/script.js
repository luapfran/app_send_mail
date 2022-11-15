$(document).ready(function () {
    $('#assunto').before('<label >Assunto Novo</label>');
    $('.ui.form').form({
        fields:{
            para:{
                identifier:'para',
                rules: [
                    { 
                        type:'empty',
                        prompt:'Digite o e-mail!'
                    }
                ]
            },
            assunto:{
                identifier:'assunto',
                rules: [
                    {
                        type:'empty',
                        prompt:'Digite o assunto!'
                    }
                ]
            },
            mensagem:{
                identifier:'mensagem',
                rules: [
                    {
                        type:'empty',
                        prompt:'Detalhar mais a mensagem'
                    }
                ]
            }            
        }
    });
     
});





