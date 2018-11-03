#!/usr/bin/php

Usage:  font_family [n_file [b_file] [i_file] [bi_file]]

font_family:      the name of the font, e.g. Verdana, 'Times New Roman',
                  monospace, sans-serif. If it equals to "system_fonts", 
                  all the system fonts will be installed.

n_file:           the .ttf or .otf file for the normal, non-bold, non-italic
                  face of the font.

{b|i|bi}_file:    the files for each of the respective (bold, italic,
                  bold-italic) faces.

If the optional b|i|bi files are not specified, load_font.php will search
the directory containing normal font file (n_file) for additional files that
it thinks might be the correct ones (e.g. that end in _Bold or b or B).  If
it finds the files they will also be processed.  All files will be
automatically copied to the DOMPDF font directory, and afm files will be
generated using php-font-lib (https://github.com/PhenX/php-font-lib).

Examples:

./load_font.php silkscreen /usr/share/fonts/truetype/slkscr.ttf
./load_font.php 'Times New Roman' /mnt/c_drive/WINDOWS/Fonts/times.ttf
