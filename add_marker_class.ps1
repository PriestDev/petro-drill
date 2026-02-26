$paths = @(
    'c:\xampp\htdocs\pet-project\petrodrill-global.com\v2\index-pages\exploration.html',
    'c:\xampp\htdocs\pet-project\petrodrill-global.com\v2\index-pages\explorationabf8.html'
)
foreach ($path in $paths) {
    if (Test-Path $path) {
        $text = Get-Content $path -Raw
        # add class before src for marker-2.gif images
        $text = $text -replace 'src="([^\"]*marker-2\.gif)"','class="marker-arrow" src="$1"'
        Set-Content $path $text
    }
}
