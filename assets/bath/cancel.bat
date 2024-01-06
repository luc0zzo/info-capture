@echo off
set "file_path=C:\Users\lucac\OneDrive\Desktop\sito cattura testo\assets\private\info.txt"

if exist "%file_path%" (
    type nul > "%file_path%"
    echo Contenuto del file %file_path% cancellato.
) else (
    echo Il file %file_path% non esiste.
)

pause
