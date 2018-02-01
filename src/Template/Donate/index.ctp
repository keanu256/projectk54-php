<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <title>Donate</title>
</head>
<body>
<?= $this->Form->create(null,['id'=> 'form1']); ?>
<table width="100%" border="0" cellpadding="3" cellspacing="3">
	<tr>
    	<td colspan="2" align="center">
        	<h2>Nạp thẻ điện thoại</h2>
        </td>
        
    </tr>
    <tr>
    	<td align="right" width="40%">
        	Nhà Mạng :
        </td>
        <td>
        	<select id="lstTelco" name="lstTelco">
                    <option value="viettel">Viettel</option>
                    <option value="mobifone">MobiFone</option>
                    <option value="vinaphone">Vinaphone</option>
                    <option value="gate">Gate</option>
                    <option value="vcoin">Vcoin</option>
                    <option value="zing">Zing</option>
                    <option value="bit">Bit</option>
                    <option value="vnmobile">vietnamobile</option>
                </select>
        </td>
    </tr>
    <tr>
    	
    	<td align="right">
        	Số Seri :
        </td>
        <td>
        	<input type="text" id="txtSeri" name="txtSeri" />
        </td>
    </tr>
    <tr><td align="right">
        	Mã số :
        </td>
        <td>
        	<input type="text" id="txtCode" name="txtCode" />
        </td>
    </tr>
     <tr>
    	<td align="right">
        	
        </td>
        <td>
        	<button class="btn-submit" type="button">Nạp thẻ</button>
        </td>
    </tr>
</table>
<?= $this->Form->end() ?>
<script>
    $(document).on('click','.btn-submit',function(){
        var w = $('#form1').serialize();

        $.ajax({
            url: '/donate/process',
            method: 'post',
            data: w,
            success: (res)=>{
                console.log(res);          
            },
            error: ()=>{
                console.log('ERROR');           
            }
        })
    })
</script>
</body>
</html>