<h1>{{$factura->emp_razon_social}}</h1>
<strong>Dirección: {{$factura->emp_direccion}}</strong><br>
<strong>Teléfono: {{$factura->emp_telefono}}</strong>
<img src="{{asset('img/imagen1.png')}}" style="width: 200px;margin-left: 450px;margin-top:-35px;">
<div style="margin-left:400px">
<div style="background: #037DD3; color:white;margin-top:10px;width:300px;">
    <strong>Factura N°</strong>
    <strong style="margin-left:100px;">Fecha</strong>
</div>
<div style="margin-top:10px;width:300px;">
    <strong>00000{{$factura->fac_numero}}</strong>
    <strong style="margin-left:100px;">{{$factura->fac_fecha}}</strong>
</div>
</div>

<div>
<div style="background: #037DD3; color:white;margin-top:10px;width:300px;text-align: center;">
    <strong>Facturar A</strong>
</div>
<div style="margin-top:10px;width:300px;">
    <strong>Cliente: </strong>
    <strong>{{$factura->cli_nom_rasocial}}</strong>
</div>
<div style="margin-top:10px;width:300px;">
    <strong>RUC: </strong>
    <strong>{{$factura->cli_ced_ruc}}</strong>
</div>
<div style="margin-top:10px;width:300px;">
    <strong>Dirección: </strong>
    <strong>{{$factura->cli_direccion}}</strong>
</div>
<div style="margin-top:10px;width:300px;">
    <strong>Teléfono: </strong>
    <strong>{{$factura->cli_telefono}}</strong>
</div>
</div>

<table style="margin-top:20px;width:700px;">
    <tr style="background:#037DD3;color:white;">
        <th>N°</th>
        <th>Cantidad</th>
        <th>Descripción</th>
        <th>Valor unitario</th>
        <th>Valor total</th>
    </tr>
    <?php $subt=0; $total=0; ?>
    @foreach($detalle as $dt)
    <?php $subt=$subt+ ($dt->det_valu*$dt->det_cant) ?>
    <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$dt->det_cant}}</td>
        <td>{{$dt->pro_descripcion}}</td>
        <td style="text-align: right;">{{number_format($dt->det_valu,2)}} $</td>
        <td style="text-align: right;">{{number_format ($dt->det_valu*$dt->det_cant,2)}} $</td>
    </tr>
    @endforeach
<?php
$fac_descuento=$factura->fac_descuento;
$iva=($subt-$fac_descuento)*0.12;
$total=($subt-$fac_descuento+$iva);
?>
    <tfoot>
<tr>
  <th colspan="3"></th>
  <th style="text-align:right;">Subtotal</th>
  <td style="text-align: right;">{{number_format($subt,2)}} $</td>
</tr>
<tr>
  <th colspan="3"></th>
  <th style="text-align:right;">Descuento</th>
  <th style="text-align:right;">{{number_format($fac_descuento,2)}} $</th>
     </tr>
<tr>
  <th colspan="3"></th>
  <th style="text-align:right;">IVA
     <th style="text-align:right;">{{number_format($iva,2)}} $</th>
<tr>
  <th colspan="3"></th>
  <th style="text-align:right;">Total</th>
  <th style="text-align:right;" id="total">{{ number_format ($total,2) }} $</th>
</tfoot>
</table>
