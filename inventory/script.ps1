param($computerx)
if (Test-Connection -Computername $computerx -BufferSize 16 -Count 1 -Quiet) {
	$LAdmin = "YEL\joao.moita-adm"
	$Password = "JOHN02.2020"
	$LPassword = ConvertTo-SecureString -AsPlainText $Password -Force
	$MySecureCreds = New-Object -TypeName System.Management.Automation.PSCredential -ArgumentList $LAdmin,$LPassword

	$displayGB = [math]::Round((Get-WmiObject -Class Win32_ComputerSystem  -computer $computerx -Credential $MySecureCreds).TotalPhysicalMemory/1GB)

	write-host $displayGB "GB RAM<br />"

	$OS = (Get-WMIObject win32_operatingsystem -computer $computerx -Credential $MySecureCreds).Caption
	write-host $OS

	$Processor = (Get-WMIObject win32_processor -computer $computerx -Credential $MySecureCreds).Name
	write-host "<br />" $Processor
}else{
	write-host "offline"
}