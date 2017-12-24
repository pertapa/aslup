<?
/*//////////////////////////////////////////////////////////////////////

Description:       Liberty Reserve Sample Store
Release Date:     Sep 20, 2007

Designed and Developed by Liberty Reserve development team.
Copyright (c) 2007 Liberty Reserve.
Website: http://www.libertyreserve.com
Contact email: tech@libertyreserve.com

This program is distributed in the hope that it will be useful but 
WITHOUT ANY WARRANTY; without even the implied warranty of 
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  

//////////////////////////////////////////////////////////////////////*/


require_once("include/content.php");

showHeader("Thanks for purchase!");

?>

<h1>
  Thank you for choosing our store!
</h1>

<h2>Purchase info</h2>

<table>
  <tr>
    <td>
      Order ID:
    </td>
    <td>
      <?=$_REQUEST["order_id"]?>
    </td>
  </tr>  
  <tr>
    <td>
      Name:
    </td>
    <td>
      <?=$_REQUEST["item_name"]?>
    </td>
  </tr>  
  <tr>
    <td>
      Price:
    </td>
    <td>
      $<?=$_REQUEST["lr_amnt"]?>
    </td>
  </tr>  
</table>

<p>
  Your purchase will be delivered to you in a couple of business days.
</p>
<p>
  <a href="index.php">Return to the main page</a>
</p>

<h2>Liberty Reserve fields sent here</h2>

<table>
  <thead>
    <tr>
      <th style="text-align: left">
        Name
      </th>
      <th style="text-align: left">
        Value
      </th>
      <th>&nbsp;
      </th>
    </tr>
  </thead>
  <tbody>
    
<?
$reqKeys = array_keys ($_REQUEST);
foreach($reqKeys as &$key) {
?>
    <tr>
      <td><?=$key?></td>
      <td><?=$_REQUEST[$key]?></td>
      <td><?=ereg("^lr_[a-z_]*$", $key) ? "<div style=\"background: #cc0000; color: #ffffff; padding: 5px; marging: 2px; text-align: center;\">LR</div>" : "&nbsp;"?></td>
    </tr>
<?
}
?>
  </tbody>
</table>


<?
showFooter();
?>
