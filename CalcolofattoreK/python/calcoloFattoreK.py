######################################################################################################################
######################################################################################################################
#
#                             Libellula Srl
#                             Programma di calcolo Fattore K
#                             Autore                    Enrico Saccheggiani
#                             Data inizio sviluppo      20/12/2019
#
#                             versione                  1.0

#                             il programma riceve in input :
#                             - Materiale
#                             - Larghezza V
#                             - GradiV
#                             - Raggio Punzone
#                             - Anisotropia
#                             - flag se la piegatura e' a 90°

#                             e ricalcola il valore del Fattore K
#
#
####################################################################################################################

import sys

materiale= sys.argv[1]
larghezzaV    = sys.argv[2]
gradiV        = sys.argv[3]
raggioPunzone = sys.argv[4]
anisotropia   = sys.argv[5]
flag90        = sys.argv[6]


print("valore fattore K  " + materiale + larghezzaV + gradiV + raggioPunzone + anisotropia + flag90)



