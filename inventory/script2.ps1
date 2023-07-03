param($computerx)
if (Test-Connection -Computername $computerx -BufferSize 16 -Count 1 -Quiet) {	
	$LAdmin = "YEL\joao.moita-adm"
	$Password = "Ram0s02.2020"
	$LPassword = ConvertTo-SecureString -AsPlainText $Password -Force
	$MySecureCreds = New-Object -TypeName System.Management.Automation.PSCredential -ArgumentList $LAdmin,$LPassword

	$IPAddress = Get-WmiObject Win32_NetworkAdapterConfiguration -computername $computerx -Credential $MySecureCreds | Where-Object {$_.Ipaddress.length -gt 1} 
	write-host '<i style="color:green" class="fa fa-circle"></i> ' $IPAddress.ipaddress[0] 
	
	$UserName = (Get-WMIObject win32_ComputerSystem -computer $computerx -Credential $MySecureCreds).UserName
	write-host ' &nbsp; &nbsp; <i style="color:black" class="fa fa-user"></i> ' $UserName
}else{
	write-host '<i style="color:red" class="fa fa-circle"></i>  Offline'
}