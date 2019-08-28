Add-Type -Assembly PresentationCore
$img = [Windows.Clipboard]::GetImage()
if ($img -eq $null) {
    Write-Host "false"
    Exit
}

$file = "{0}\image.jpg" -f [Environment]::GetFolderPath('MyPictures')

$stream = [IO.File]::Open($file, "OpenOrCreate")
$encoder = New-Object Windows.Media.Imaging.JpegBitmapEncoder
$encoder.QualityLevel = 90
$encoder.Frames.Add([Windows.Media.Imaging.BitmapFrame]::Create($img))
$encoder.Save($stream)
$stream.Dispose()
Write-Host $file