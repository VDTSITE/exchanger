<div class="three-quarters animate_afl  vc_custom_1437646393204 color_custom animate_start" style="padding: 1%; vertical-align: baseline;"><div class="wpb_text_column "><div class="wpb_wrapper">
{literal}

	<style>


table {
    border-collapse: collapse;
    width: 100%;
}
  p, h1 {
    margin: 2em 0;
  }
td, th {
   text-align: center;
   border: 1px solid #ddd;
   padding:.5em 5px;
    font-size: 1.2em;
}
  th {
    background-color:#f4f4f4;
    font-weight: normal;
  }
caption {
    margin: 0;
    font-weight: bold;
    font-size: 1.3em;
    background: #eee;
    padding: 10px;
    border: 1px solid #ddd;
 }


  /* queries */
@media screen and (max-width: 520px){

  html:not(.emp-sales) .emp-sales th,
  html:not(.emp-sales) .emp-sales td {
    font-size: 0;
    padding: 0;
    content: "";
    height: 7px;
  }
  html:not(.emp-sales) table {
    position: relative;
    overflow: hidden;
  }
  html:not(.emp-sales) table:before {
    content: "Table: Tap to View";
    position: absolute;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,.6);
    color: #fff;
    font-weight: bold;
    font-size: 1.6em;
    text-align: center;
    vertical-align: middle;
    z-index: 100;
    font-family: Helvetica, sans-serif;

  }
 html.emp-sales table:before {
    content: "";
    display: block;
    background: #333;
    padding: 10px;
  }

  html.emp-sales table:before{
    content: "Back";
    position: absolute;
    top: 0;
    left: 15px;
    padding: .5em 1em;
    margin: 10px 0;
    font-weight: bold;
    color: #fff;
    background: #000;
    border: 1px solid #fff;
  }

}

</style>
{/literal}
	<table class="emp-sales">
    <caption>Акции</caption>
    <thead>
      <tr>
        <td></td>
        <th scope="col">Тип</th>
		   <th scope="col">Валюта</th>
        <th scope="col">Процент</th>
        <th scope="col">К оплате</th>
        <th scope="col">К получению</th>
        <th scope="col">Статус</th>
        <th scope="col" colspan="2">Редактирование</th>

      </tr>
    </thead>
    <tbody>




    {section loop=$categories name=i}

      <tr style="{if $categories[i].actual != 0}background: rgba(210, 210, 210, 0.8) none repeat scroll 0% 0%; text-decoration: line-through; color: rgb(136, 136, 136);{else}
        {if $categories[i].type_operation == 0}background: rgba(240, 254, 223, 0.25) none repeat scroll 0% 0%; 
        {else}
        background: rgb(255, 245, 245) none repeat scroll 0% 0%;
        {/if}
        {/if}">
        <th scope="row">{$count++}</th>
        <td>{if $categories[i].type_operation == 0}Ввод{else}Вывод{/if}</td>
        
		    <td>{section loop=$currency name=l}{if $currency[l].id == $categories[i].id_currency}{$currency[l].name}{/if}{/section}</td>

        
        <td>{$categories[i].percent} %</td>
        <td>{$categories[i].k_oplate}</td>
		  <td>{$categories[i].k_polucheniju}</td>
		  <td>{if $categories[i].actual == 0}<a href="view_stock.php?actual=finish&ids={$categories[i].id}"><b>Завершить</b></a>{else}<a href="view_stock.php?actual=active&ids={$categories[i].id}"><b>Сделать активной</b></a>{/if}</td>
      <td><a href="edit_stock.php?ids={$categories[i].id}">Изменить</a></td>
      <td><a href="delete_stock.php?ids={$categories[i].id}">Удалить</a></td>

      </tr>
    {/section}



    </tbody>
  </table></div> </div> </div>