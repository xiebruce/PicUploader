Add-Type -Assembly PresentationCore
$img = [Windows.Clipboard]::GetImage()
if ($img -eq $null) {
    Write-Host "false"
    Exit
}


$file = "{0}\image.png" -f [Environment]::GetFolderPath('MyPictures')
$stream = [IO.File]::Open($file, "OpenOrCreate")
$encoder = New-Object Windows.Media.Imaging.PngBitmapEncoder
$fcb = new-object Windows.Media.Imaging.FormatConvertedBitmap($img, [Windows.Media.PixelFormats]::Rgb24, $null, 0)
$encoder.Frames.Add([Windows.Media.Imaging.BitmapFrame]::Create($fcb))
$encoder.Save($stream)
$stream.Dispose()
Write-Host $file