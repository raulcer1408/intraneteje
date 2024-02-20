window.addEventListener('load', function() {
   InicializarFechas();
   FechaInicial1 = "";
});
/*--------habre el calendario cuando esta en los campos----*/
const FechaInicio = MCDatepicker.create({
    el: '#FechaInicio',
    
    autoClose: true,
    // closeOnBlur: true,
    dateFormat: 'mm',
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
const FechaFin = MCDatepicker.create({ 
      el: '#FechaFin' ,
      autoClose: true,
    // closeOnBlur: true,
    dateFormat: 'mm',
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
        if (FechaInicio1 == ""){
            Swal.fire("<h1>Error de Fechas!</h1>", 'Las Fechas No Pueden Estar Vacias', "error");
            InicializarFechas();
        } else {
           DetalleCumpleanos(FechaInicio1);       
        }
    });
$(document).on("click", "#reset", function(e) {
    e.preventDefault();
    InicializarFechas();
    DetalleCumpleanos(FechaInicial1);
    FechaInicio.reset();
    FechaFin.reset();
   
 });
function InicializarFechas(){
     let request2 = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
    let ajaxUrl2 = base_url+'/Cumpleanos/FechaCalculo';
    request2.open("GET",ajaxUrl2,true);
    request2.send();
    request2.onreadystatechange = function(){

        if(request2.readyState == 4 && request2.status == 200){
            let objData = JSON.parse(request2.responseText);
            console.log(objData);
            if(objData.FechaInicio)
            {
                document.getElementById("FechaInicio").value = objData.FechaInicio;
                FechaInicial1= objData.FechaInicio;
            }
        }
   }

}

  function DetalleCumpleanos(FechaInicial){
     $('#cumpleanos').dataTable( {
        "aProcessing":true,
        "aServerSide":true,
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
        },
        "ajax":{
            "url": " "+base_url+"/Cumpleanos/cumpleanosMes/"+FechaInicial,
            "data":""
        },
        "columns":[
            {"data":"Id"},
            {"data":"NombreCompleto"},
            {"data":"FechaNacimiento"}
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
    });
}
let cumpleanos;
let rowTable = "";
let divLoading = document.querySelector("#divLoading");
document.addEventListener('DOMContentLoaded', function(){

    cumpleanos = $('#cumpleanos').dataTable( {
        "aProcessing":true,
        "aServerSide":true,
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
        },
        "ajax":{
            "url": " "+base_url+"/Cumpleanos/cumpleanosMes/",
            "data":""
        },
        "columns":[
            {"data":"Id"},
            {"data":"NombreCompleto"},
            {"data":"FechaNacimiento"}
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
         "columnDefs":[
            {widht:'20%',
            targets : 1}
         ],
         fixedColumns: true
    })
});
