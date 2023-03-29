$(document).ready(function () {
     //$('#assunto').before('<label >Assunto atual</label>'); 
    $('.ui.form').form({
        fields:{
            para:{
                identifier:'para',
                rules: [
                    { 
                        type:'empty',
                        prompt:'Digite o e-mail corretamente!'
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
    $('.menu .item')
        .tab()
    ;
     
});





