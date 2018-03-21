# Bbc MVC

Willkommen beim MVC des Bbc. In diesem Repository findest du den Code sowie eine Anleitung dazu.

## Aufbau

Über verschiedene Branches wird das MVC Framework Schritt für Schritt aufgebaut und auf der letzten Branch findest du dann das vollständige Framework mit ein Paar Beispielseiten. Hier ein kleiner Überblick.

| Reihenfolge | Branch      | Inhalt                                                          |
|-------------|-------------|-----------------------------------------------------------------|
|             | master      | Einleitung                                                      |
| 1           | controller  | Grundsetup. Dispatcher und Controller                           |
| 2           | view        | Alles zum Thema HTML                                            |
| 3           | model       | Dann noch die Werkzeuge für den Datenbankzugriff                |
| 4           | formbuilder | Für alle die noch nicht genug haben, noch ein Formulargenerator |

## Installation unter Windows

### Vorbereitung

Füge das PHP-Excutable zum Pfad:
 * Windows-Taste + R zum starten der Windows-Eingabeaufforderung
 * Programm starten: „SystemPropertiesAdvanced.exe“
 * Ganz unten auf „Umgebungsvariablen“
 * Variable „Path“ bearbeiten und "C:\php7\php" eintragen

### Installation

Kopiere zuert alle Dateien aus der Branch, welche du verwenden möchtest, in den Ordner in dem du Dein Projekt entwickeln möchtest. Hier wird das Verzeichnis `C:\dev\my-project` verwendet.

Um später mit einem DNS Namen auf die Seite zugreifen zu können, musst du den gewünschten DNS Namen in der `hosts`-Datei eintagen. Wir verwenden in diesem Beispiel den Namen `my-project.local`.

`C:\Windows\System32\drivers\etc\hosts`
```
# [...]

127.0.0.1    my-project.local
```

Öffne ein `cmd` und wechsle in dein Projektverzeichniss. Du kannst den Server mit folgenden Befehlen managen:

| Befehl              | Beschrieb             |
|---------------------|-----------------------|
| `bin/start_server`  | Starten des Webserver |
| `bin/status_server` | Status des Webserver  |
| `bin/stop_server`   | Stoppen des Webserver |


Nun solltest du mit dem Browser auf die Seite `http://my-project.local` zugreifen können.
