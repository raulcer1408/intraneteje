
window.addEventListener('load', function() {
    cump();
    PermisosParticulares();
    AtrasosMes();
});
function PermisosParticulares(){
    let request2 = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
    let ajaxUrl2 = base_url+'/Dashboard/PermisosParticulares';
    request2.open("GET",ajaxUrl2,true);
    request2.send();
    request2.onreadystatechange = function(){

        if(request2.readyState == 4 && request2.status == 200){
            let objData = JSON.parse(request2.responseText);
            if(objData.status)
            {
                document.getElementById("Permisos").innerHTML = objData.data[0].MinutosAcumulados;
                if(objData.SinMinutos == "Si"){
                    document.getElementById("Permisos").style.color = "red";
                }
               
            }
        }
   }
}
function AtrasosMes(){
    let request1 = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
    let ajaxUrl1 = base_url+'/Dashboard/MinutosAtrasos';
    request1.open("GET",ajaxUrl1,true);
    request1.send();
    request1.onreadystatechange = function(){
        if(request1.readyState == 4 && request1.status == 200){
            let objData = JSON.parse(request1.responseText);
            if(objData.status)
            {
                //console.log(objData.resultado);
                document.getElementById("Atrasos").innerHTML = objData.resultado;
                if(objData.SinMinutos == 'Si'){
                    document.getElementById("Atrasos").style.color = "red";
                    document.getElementById("Mensaje").innerHTML = "Usted exedio el Numero de Minutos Permitidos";
                }
               
            }
        }
   }
    
}
 function cump() {
    let request3 = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
    let ajaxUrl3 = base_url+'/Dashboard/CumpleanosHoy';
    request3.open("GET",ajaxUrl3,true);
    request3.send();
    request3.onreadystatechange = function(){

        if(request3.readyState == 4 && request3.status == 200){
            let objData1 = JSON.parse(request3.responseText);
            if(objData1.status)
            {
                document.getElementById("felicidades").innerHTML = " <h3><i class='fas fa-birthday-cake'></i> HOY CUMPLE AÑOS</h3>";
                document.getElementById("HoyCumple").innerHTML = objData1.data[0].NombreCompleto;
                document.getElementById("mensaje").innerHTML = "NO OLVIDES EFECTUAR TU DECLARACIÓN JURADA HASTA ANTES DE FIN DE MES"; 
            }else{
                document.getElementById("HoyCumple").innerHTML = objData1.msg;
            }
        }
   }

};

let TelefonosInternos;
let rowTable = "";
let divLoading = document.querySelector("#divLoading");
document.addEventListener('DOMContentLoaded', function(){

    TelefonosInternos = $('#TelefonosInternos').dataTable( {
        "aProcessing":true,
        "aServerSide":true,
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
        },
        "ajax":{
            "url": " "+base_url+"/dashboard/InternosInstitucion",
            "data":""
        },
        "columns":[
            {"data":"Id"},
            {"data":"NombreCompleto"},
            {"data":"Interno"},
            {"data":"Celular"},
            {"data":"CorreoInstitucional"},
            {"data":"CorreoPersonal"}
        ],
        'dom': 'lBfrtip',
        'buttons': [
            {
                "extend": "copyHtml5",
                "text": "<i class='far fa-copy'></i> Copiar",
                "titleAttr":"Copiar",
                "className": "btn btn-secondary"
            },{
                "extend": "excelHtml5",
                "text": "<i class='fas fa-file-excel'></i> Excel",
                "titleAttr":"Esportar a Excel",
                "className": "btn btn-success"
            },{
                "extend": "pdfHtml5",
                "text": "<i class='fas fa-file-pdf'></i> PDF",
                "titleAttr":"Esportar a PDF",
                "className": "btn btn-danger"
            },{
                "extend": "csvHtml5",
                "text": "<i class='fas fa-file-csv'></i> CSV",
                "titleAttr":"Esportar a CSV",
                "className": "btn btn-info"
            }
        ],
        "resonsieve":"true",
        "bDestroy": true,
        "iDisplayLength": 10,
         "order":[[0,"asc"]], 
    })
});
