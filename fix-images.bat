@echo off
echo Fixing Laravel image storage issues...

REM Stop any running processes
taskkill /f /im php.exe 2>nul

REM Clear Laravel caches
php artisan cache:clear
php artisan config:clear
php artisan view:clear
php artisan route:clear

REM Remove existing storage link
if exist "public\storage" rmdir /s /q "public\storage"

REM Create fresh storage directories
if not exist "storage\app\public\news" mkdir "storage\app\public\news"
if not exist "storage\app\public\events" mkdir "storage\app\public\events"
if not exist "storage\app\public\gallery" mkdir "storage\app\public\gallery"
if not exist "storage\app\public\testimonials" mkdir "storage\app\public\testimonials"

REM Create public storage directory
mkdir "public\storage"

REM Copy all storage contents
xcopy "storage\app\public\*" "public\storage\" /E /Y

REM Set proper permissions (Windows)
icacls "public\storage" /grant "Everyone:(OI)(CI)F" /T

echo.
echo Image storage fix complete!
echo.
echo Testing image access...
if exist "public\storage\news" (
    echo News images found:
    dir "public\storage\news"
    echo.
    echo Test URLs:
    for %%f in (public\storage\news\*.jpg) do (
        echo http://localhost:8000/storage/news/%%~nxf
    )
) else (
    echo No news images found
)

echo.
echo Please test the following URLs in your browser:
echo - Test page: http://localhost:8000/test-images.php
echo - News images: http://localhost:8000/storage/news/
echo.
pause
