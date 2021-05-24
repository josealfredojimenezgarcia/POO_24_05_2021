<? php
    interfaz uso {
         función  pública sentarses (): cadena ;
    }

    class silla {
        public  $ tamano ;
         dimensión $ pública ;
        public  $ catidadPaticas ;
        función  __construct () {
            $ arg = ( func_num_args ())? ( objeto ) func_get_args () [ 0 ]: ( objeto ) nulo ;
            $ esto -> tamano = $ arg -> TAMANO ;
            $ esto -> dimensión = $ arg -> DIMENSIÓN ;
            $ esto -> catidadPaticas = $ arg -> CATIDADPATICAS ;
        }
         función  pública sentarse (): cadena {
            // $ arg = (func_num_args ())? (objeto) func_get_args () [0]: (objeto) nulo;
            return   "Me sente en una silla normal" ;
        }
    }
    clase mesedora extiende silla {
        función  __construct () {
            $ arg = ( func_num_args ())? ( objeto ) func_get_args () [ 0 ]: ( objeto ) nulo ;
            $ esto -> catidadPaticas = $ arg -> CATIDADPATICAS ;
        }
         función  pública sentarse (): cadena {
            // $ arg = (func_num_args ())? (objeto) func_get_args () [0]: (objeto) nulo;
            return   "Me sente en una silla mesedora y me balancie" ;
        }
    }

    $ obj = nueva mesedora ([
        "TAMANO" => ( int ) 80 ,
        "CATIDADPATICAS" => ( cadena ) '2 patas de arco' ,
        "DIMENSION" => ( cadena ) "45x80"
    ]);
    
    print_r (([ $ obj , 'sentarse' ]) ());
?>