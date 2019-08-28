function Show-BalloonTip {            
    [cmdletbinding()]            
    param(            
     [parameter(Mandatory=$true)]            
     [string]$Title,            
     [ValidateSet("Info","Warning","Error")]             
     [string]$MessageType = "Info",            
     [parameter(Mandatory=$true)]            
     [string]$Message,            
     [string]$Duration=100
    )            

    [system.Reflection.Assembly]::LoadWithPartialName('System.Windows.Forms') | Out-Null            
    $balloon = New-Object System.Windows.Forms.NotifyIcon            
    $path = Get-Process -id $pid | Select-Object -ExpandProperty Path            
    $icon = [System.Drawing.Icon]::ExtractAssociatedIcon($path)            
    $balloon.Icon = $icon            
    $balloon.BalloonTipIcon = $MessageType            
    $balloon.BalloonTipText = $Message            
    $balloon.BalloonTipTitle = $Title            
    $balloon.Visible = $true            
    $balloon.ShowBalloonTip($Duration)            
}


Show-BalloonTip -Title $($args[0]) -MessageType Info -Message $($args[1]) -Duration 100