$(document).ready(function () {
    /* $('#assunto').before('<label >Assunto Novo</label>'); */
    $('.ui.form').form({
        fields:{
            para:{
                identifier:'para',
                rules: [
                    { 
                        type:'empty',
                        prompt:'Digite o e-mail seu burro!'
                    }
                ]
            },
            assunto:{
                identifier:'assunto',
                rules: [
                    {
                        type:'empty',
                        prompt:'Digite o assunto completo!'
                    }
                ]
            },
            mensagem:{
                identifier:'mensagem',
                rules: [
                    {
                        type:'empty',
                        prompt:'Digite a mensagem'
                    }
                ]
            }            
        }
    });
     
});





