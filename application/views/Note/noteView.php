<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    echo "<h2>Hellow World From Note under view folder</h2>";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        table{
            border-collapse:collapse;
            margin: 1rem auto;
        }
        th{
            border: 1px solid;
            text-align: center;
        }
        td{
            border: 1px solid;
            text-align: right; 
            
        }
       input{
            border: none;
            text-align: right;            
        }
        tfoot{
            background: lightgrey;
            padding: 15px;
        }
        tfoot td{
            padding-right: 18px;
        }
         
    </style>
    <title>Note View</title>
</head>
<body>
<form method='post' action="<?php echo base_url();?>NoteController/saveNote">
<table>
        <thead>
            <tr>
                    <td colspan="2">Branch code</td>
                    <td colspan="2">
                        <input style="text-align: center;" type="text" name="branchCode" id="branchCode" placeholder="type your branch code">
                    </td>
                </tr> 
                <tr >
                    <td colspan="2">Date</td>
                    <td colspan="2">
                        <input style="text-align: left;" type="date" name="reportdate" value="<?php echo date('Y-m-d')?>" id="date">
                    </td>
                </tr>
           
            <th></th>
            <th>Total No. of Note</th>
            <th>No. of Mutilated Note</th>
            <th>No. of Fresh Note</th>
        </thead>
        <tbody>
        

            <tr>
                <th>1000/-</th><!- 1000 = 1k 500= 5h -->
                <td ><input type="number" name="1k"value="0" id="1k" tabindex="1" onkeyup="calculateTotal()" autofocus></td>
                <td ><input type="number" name="m1k"value="0" id="m1k" tabindex="11"  onkeyup="calculateTotal()"></td>
                <td ><input type="number" name="f1k"value="0" id="f1k" readonly="readonly"></td>
    
            </tr>
            <tr>
                <th>500/-</th>
                <td ><input type="number" name="5h"  value="0" id="5h"  tabindex="2" onkeyup="calculateTotal()"  ></td>
                <td ><input type="number" name="m5h" value="0" id="m5h" tabindex="12" onkeyup="calculateTotal()"></td>
                <td ><input type="number" name="f5h" value="0" id="f5h" readonly="readonly" ></td>                          
            </tr>
            <tr>
                <th>200/-</th>
                <td ><input type="number" name="2h"  value="0" id="2h" tabindex="3" onkeyup="calculateTotal()"></td>
                <td ><input type="number" name="m2h" value="0" id="m2h" tabindex="13"  onkeyup="calculateTotal()"></td>
                <td ><input type="number" name="f2h" value="0" id="f2h" readonly="readonly" ></td>                                
            </tr>
            <tr>
                <th>100/-</th>
                <td ><input type="number" name="1h"  value="0" id="1h" tabindex="4" onkeyup="calculateTotal()"></td>
                <td ><input type="number" name="m1h" value="0" id="m1h" tabindex="14" onkeyup="calculateTotal()"></td>
                <td ><input type="number" name="f1h" value="0" id="f1h" readonly="readonly" ></td>
                
            </tr>
            <tr>
                <th>50/-</th>
                <td ><input type="number" name="50" value="0"  id="s50" tabindex="5" onkeyup="calculateTotal()"></td>
                <td ><input type="number" name="m50" value="0" id="m50" tabindex="15" onkeyup="calculateTotal()"></td>
                <td ><input type="number" name="f50" value="0" id="f50" readonly="readonly"></td>
                
            </tr>
            <tr>
                <th>20/-</th>
                <td ><input type="number" name="20" value="0"  id="s20" tabindex="6" onkeyup="calculateTotal()" ></td>
                <td ><input type="number" name="m20" value="0" id="m20" tabindex="16"  onkeyup="calculateTotal()"></td>
                <td ><input type="number" name="f20" value="0" id="f20" readonly="readonly"></td>                
            </tr>
            <tr>
                <th>10/-</th>
                <td ><input type="number" name="10" value="0"  id="s10" tabindex="7" onfocusout="calculateTotal()" ></td>
                <td ><input type="number" name="m10" value="0" id="m10" tabindex="17" onfocusout="calculateTotal()"></td>
                <td ><input type="number" name="f10" value="0" id="f10" readonly="readonly"></td>
                
            </tr>
            <tr>
                <th>5/-</th>
                <td ><input type="number" name="5" value="0"  id="s5" tabindex="8" onfocusout="calculateTotal()"></td>
                <td ><input type="number" name="m5" value="0" id="m5" tabindex="18" onfocusout="calculateTotal()"></td>
                <td ><input type="number" name="f5" value="0" id="f5" readonly="readonly"></td>
                
            </tr>
            <tr>
                <th>2/-</th>
                <td ><input type="number" name="2" value="0" id="s2" tabindex="9" onfocusout="calculateTotal()" ></td>
                <td ><input type="number" name="m2" value="0" id="m2" tabindex="19" onfocusout="calculateTotal()"></td>
                <td ><input type="number" name="f2" value="0" id="f2" readonly="readonly"></td>
                
            </tr>
            <tr>
                <th>1/-</th>
                <td ><input type="number" name="1" value="0" id="s1" tabindex="10" onfocusout="calculateTotal()" ></td>
                <td ><input type="number" name="m1" value="0" id="m1" tabindex="20" onfocusout="calculateTotal()"></td>
                <td ><input type="number" name="f1" value="0" id="f1" readonly="readonly"></td>
                
            </tr>       
        </tbody>
        <tfoot>
            <tr>
                <th>Total</th>
                <td id="cashInHandTotal">0</td>
                <td id="mutilatedNoteTotal">0</td>
                <td id="freshNoteTotal">0</td>
            </tr>
            <tr >
                <td colspan="100%" style="text-align: center;">
                    <button style="text-align: center; width: 50%;" type="submit">Sumbit Data</button>
                </td>
            </tr>

        </tfoot>
   
    </table>
    </form>

    <script language="javascript" type="text/javascript">

    function calculateTotal() {
        let cashInHandTotal = 0;
        const allTaka_1k = parseInt(document.getElementById('1k').value);
        const allTaka_5h = parseInt(document.getElementById('5h').value);
        const allTaka_2h = parseInt(document.getElementById('2h').value);
        const allTaka_1h = parseInt(document.getElementById('1h').value);
        const allTaka_s50 = parseInt( document.getElementById('s50').value);
        const allTaka_s20 = parseInt( document.getElementById('s20').value);
        const allTaka_s10 = parseInt( document.getElementById('s10').value);
        const allTaka_s5 = parseInt(document.getElementById('s5').value);
        const allTaka_s2 = parseInt(document.getElementById('s2').value);
        const allTaka_s1 = parseInt(document.getElementById('s1').value);

        let mutilatedNoteTotal = 0;
        const mutilated_1k = parseInt(document.getElementById('m1k').value);
        const mutilated_5h = parseInt(document.getElementById('m5h').value);
        const mutilated_2h = parseInt(document.getElementById('m2h').value);
        const mutilated_1h = parseInt(document.getElementById('m1h').value);
        const mutilated_s50 = parseInt( document.getElementById('m50').value);
        const mutilated_s20 = parseInt( document.getElementById('m20').value);
        const mutilated_s10 = parseInt( document.getElementById('m10').value);
        const mutilated_s5 = parseInt(document.getElementById('m5').value);
        const mutilated_s2 = parseInt(document.getElementById('m2').value)
        const mutilated_s1 = parseInt(document.getElementById('m1').value);

        let freshNoteTotal = 0;
        const freshNote_f1k= allTaka_1k - mutilated_1k ;
        const freshNote_f5h= allTaka_5h - mutilated_5h ;
        const freshNote_f2h= allTaka_2h - mutilated_2h ;
        const freshNote_f1h= allTaka_1h - mutilated_1h ;
        const freshNote_f50= allTaka_s50- mutilated_s50;
        const freshNote_f20= allTaka_s20- mutilated_s20;
        const freshNote_f10= allTaka_s10- mutilated_s10;
        const freshNote_f5 = allTaka_s5 - mutilated_s5 ;
        const freshNote_f2 = allTaka_s2 - mutilated_s2 ;
        const freshNote_f1 = allTaka_s1 - mutilated_s1 ;

        cashInHandTotal = cashInHandTotal + allTaka_1k+allTaka_5h+allTaka_2h+allTaka_1h+allTaka_s50+allTaka_s20+allTaka_s10+allTaka_s5+allTaka_s2 +allTaka_s1;       
        mutilatedNoteTotal = mutilatedNoteTotal + mutilated_1k+mutilated_5h+mutilated_2h+mutilated_1h+mutilated_s50+mutilated_s20+mutilated_s10+mutilated_s5+mutilated_s2 +mutilated_s1;
        freshNoteTotal = freshNoteTotal + freshNote_f1k+freshNote_f5h+freshNote_f2h+freshNote_f1h+freshNote_f50+freshNote_f20+freshNote_f10+freshNote_f5 +freshNote_f2 +freshNote_f1;


        document.getElementById('cashInHandTotal').innerHTML = cashInHandTotal;
        document.getElementById('mutilatedNoteTotal').innerHTML = mutilatedNoteTotal;
        document.getElementById('freshNoteTotal').innerHTML = freshNoteTotal;                  
        
        document.getElementById('f1k').value= freshNote_f1k;
        document.getElementById('f5h').value= freshNote_f5h;
        document.getElementById('f2h').value= freshNote_f2h;
        document.getElementById('f1h').value= freshNote_f1h;
        document.getElementById('f50').value= freshNote_f50;
        document.getElementById('f20').value= freshNote_f20;
        document.getElementById('f10').value= freshNote_f10;
        document.getElementById('f5').value = freshNote_f5 ;
        document.getElementById('f2').value = freshNote_f2 ;
        document.getElementById('f1').value = freshNote_f1 ;
    }        
    </script>
</body>
</html>
