@echo off
echo Setting up Laravel storage directories...

REM Create storage directories if they don't exist
if not exist "storage\app\public\news" mkdir "storage\app\public\news"
if not exist "storage\app\public\events" mkdir "storage\app\public\events"
if not exist "storage\app\public\gallery" mkdir "storage\app\public\gallery"
if not exist "storage\app\public\testimonials" mkdir "storage\app\public\testimonials"

REM Create public storage directory if it doesn't exist
if not exist "public\storage" mkdir "public\storage"

REM Copy storage contents to public storage
xcopy "storage\app\public\*" "public\storage\" /E /Y

echo Storage setup complete!
echo.
echo Your images will now be accessible at:
echo - News: http://localhost:8000/storage/news/
echo - Events: http://localhost:8000/storage/events/
echo - Gallery: http://localhost:8000/storage/gallery/
echo - Testimonials: http://localhost:8000/storage/testimonials/
pause
