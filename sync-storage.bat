@echo off
echo Syncing Laravel storage directories...

REM Remove existing public storage directory
if exist "public\storage" rmdir /s /q "public\storage"

REM Create new public storage directory
mkdir "public\storage"

REM Copy all storage contents to public storage
xcopy "storage\app\public\*" "public\storage\" /E /Y

echo Storage sync complete!
echo.
echo Checking for images...
if exist "public\storage\news" (
    echo News images found:
    dir "public\storage\news"
) else (
    echo No news images found
)

if exist "public\storage\events" (
    echo Event images found:
    dir "public\storage\events"
) else (
    echo No event images found
)

if exist "public\storage\gallery" (
    echo Gallery images found:
    dir "public\storage\gallery"
) else (
    echo No gallery images found
)

echo.
echo Your images should now be accessible at:
echo - News: http://localhost:8000/storage/news/
echo - Events: http://localhost:8000/storage/events/
echo - Gallery: http://localhost:8000/storage/gallery/
pause
