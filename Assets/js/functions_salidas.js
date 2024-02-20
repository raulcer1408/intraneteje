/*window.addEventListener('load', function() {
   InicializarFechas();
   FechaInicial1 = "";
   FechaFinal1 = "";
   AtrasosMinutos(FechaInicial1,FechaFinal1);
});
/*--------habre el calendario cuando esta en los campos----*/
const FechaInicio = MCDatepicker.create({
    el: '#FechaInicio',
    
    autoClose: true,
    // closeOnBlur: true,
    dateFormat: 'DD-mm-YYYY',
    customWeekDays: ['Domingo', 'Lunes', 'Marțes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado'],
    customMonths: [
        'Enero',
        'Febrero',
        'Marzo',
        'Abril',
        'Mayo',
        'Junio',
        'Julio',
        'Agosto',
        'Septiembre',
        'Octubre',
        'Noviembre',
        'Diciembre'
    ],
    disableDates: [new Date(2019,11, 25), new Date(2019, 11, 26)], // ex: [nueva fecha (2019,11, 25 ), nueva fecha (2019, 11, 26)]
    customOkBTN: 'Aceptar',
    customClearBTN: 'Limpiar',
    customCancelBTN: 'Cancelar',
    
})
function fntTipoSalida(){
    if(document.querySelector('#listRolid')){
        let ajaxUrl = base_url+'/Roles/getSelectRoles';
        let request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
        request.open("GET",ajaxUrl,true);
        request.send();
        request.onreadystatechange = function(){
            if(request.readyState == 4 && request.status == 200){
                document.querySelector('#listRolid').innerHTML = request.responseText;
                $('#listRolid').selectpicker('render');
            }
        }
    }
}

/*const FechaFin = MCDatepicker.create({ 
      el: '#FechaFin' ,
      autoClose: true,
    // closeOnBlur: true,
    dateFormat: 'DD-mm-YYYY',
    customWeekDays: ['Domingo', 'Lunes', 'Marțes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado'],
    customMonths: [
        'Enero',
        'Febrero',
        'Marzo',
        'Abril',
        'Mayo',
        'Junio',
        'Julio',
        'Agosto',
        'Septiembre',
        'Octubre',
        'Noviembre',
        'Diciembre'
    ],
    customOkBTN: 'Aceptar',
    customClearBTN: 'Limpiar',
    customCancelBTN: 'Cancelar',

}) 
//-----Capturar Datos de Date------//
$(document).on("click", "#filter", function(e) {
        e.preventDefault();
        var FechaInicio1 = $("#FechaInicio").val();
        var FechaFin1 = $("#FechaFin").val();
        if (FechaInicio1 == "" || FechaFin1 == "") {
            Swal.fire("<h1>Error de Fechas!</h1>", 'Las Fechas No Pueden Estar Vacias', "error");
            InicializarFechas();
        } else {
            AtrasosMinutos(FechaInicio1, FechaFin1);
             DetalleAtrasos(FechaInicio1, FechaFin1);
             
         
        }
    });
$(document).on("click", "#reset", function(e) {
    e.preventDefault();
    InicializarFechas();
    AtrasosMinutos(FechaInicial1, FechaFinal1);
    DetalleAtrasos(FechaInicial1, FechaFinal1);
    FechaInicio.reset();
    FechaFin.reset();
   
 });
function InicializarFechas(){
     let request2 = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
    let ajaxUrl2 = base_url+'/Marcaciones/FechaCalculo';
    request2.open("GET",ajaxUrl2,true);
    request2.send();
    request2.onreadystatechange = function(){

        if(request2.readyState == 4 && request2.status == 200){
            let objData = JSON.parse(request2.responseText);
            if(objData.FechaInicio)
            {
                document.getElementById("FechaInicio").value = objData.FechaInicio;
                document.getElementById("FechaFin").value = objData.FechaFin;
                FechaInicial1= objData.FechaInicio;
                FechaFinal1 = objData.FechaFin;
                
                              
            }
        }
   }

}

  function DetalleAtrasos(FechaInicial,FechaFinal){
     $('#LicenciasDet').dataTable( {
        "aProcessing":true,
        "aServerSide":true,
        "language": {
            "url": " "+base_url+"/Assets/js/Spanish.json"
        },
        "ajax":{
            "url": " "+base_url+"/Licencias/LicenciasDetalle/"+FechaInicial+"/"+FechaFinal,
            "data":""
        },
        "columns":[
            {"data":"NroTarjetaAsistencia"},
            {"data":"NombreCompleto"},
            {"data":"FechaLicencia"},
            {"data":"Turno"},
            {"data":"Descripcion"},
            {"data":"Motivo"},
            {"data":"ConGoceHaberes"}
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
        "resonsieve":true,
        "bDestroy": true,
        "iDisplayLength": 10,
         "order":[[0,"asc"]] 
    })

}
            


function AtrasosMinutos(FechaInicial,FechaFinal){
    let request2 = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
    let ajaxUrl2 = base_url+'/Licencias/LicenciasDetalle/'+FechaInicial+"/"+FechaFinal;
    request2.open("GET",ajaxUrl2,true);
    request2.send();
    request2.onreadystatechange = function(){
        if(request2.readyState == 4 && request2.status == 200){
        let objData = JSON.parse(request2.responseText);
            if(objData.status)
            {
              document.getElementById("Mensaje").innerHTML = objData.data[0].NombreCompleto;
            }else{
                if(objData.ErrorFecha == 'Si'){
                    FechaInicio.reset();
                    FechaFin.reset();
                    Swal.fire("<h1>Error de Fechas!</h1>", objData.msg , "error");
                    InicializarFechas();
                }
            }

        }
   }
}
let LicenciasDet;
let rowTable = "";
let divLoading = document.querySelector("#divLoading");
document.addEventListener('DOMContentLoaded', function(){

    LicenciasDet = $('#LicenciasDet').dataTable( {
        "aProcessing":true,
        "aServerSide":true,
        "language": {
            "url": " "+base_url+"/Assets/js/Spanish.json"
        },
        "ajax":{
            "url": " "+base_url+"/Licencias/LicenciasDetalle",
            "data":""
        },
        "columns":[
            {"data":"NroTarjetaAsistencia"},
            {"data":"NombreCompleto"},
            {"data":"FechaLicencia"},
            {"data":"Turno"},
            {"data":"Descripcion"},
            {"data":"Motivo"},
            {"data":"ConGoceHaberes"}
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
         "order":[[0,"asc"]] 
    })
});*/