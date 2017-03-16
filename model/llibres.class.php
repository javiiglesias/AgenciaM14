<?php

/*
  Classe per a la gestió els llibres
 */
include_once 'categoria.class.php';
include_once 'idioma.class.php';

class Llibre {

    public $isbn;
    public $nom;
    public $numPag;
    public $autor;
    public $categoria;
    public $cubierta;
    public $editorial;
    public $llengua;
    public $resumen;
    public $preu;

    function __construct($_isbn, $_nom, $_numPag, $_autor, $_categoria, $_cubierta, $_editorial, $_llengua, $_resumen, $_preu) {
        $this->isbn = $_isbn;
        $this->nom = $_nom;
        $this->numPag = $_numPag;
        $this->autor = $_autor;
        $this->categoria = $_categoria;
        $this->cubierta = $_cubierta;
        $this->editorial = $_editorial;
        $this->llengua = $_llengua;
        $this->resumen = $_resumen;
        $this->preu = $_preu;
    }

}

class LlibresDAO {

    private $llistaLlibres = [];

    function __construct() {
        $cat = new CategoriaDAO();
        $idioma = new IdiomaDAO();
        if (!isset($_SESSION['llistaLlibresSes'])) {
            $this->llistaLlibres[] = new Llibre('8787656445245', 'El nombre del viento', '8050', 'Patrick Rothfuss', $cat->getCategoria('3'), 'tapa blanda', 'PLAZA & JANES EDITORES', $idioma->getIdioma('2'), 'Una increíble historia que sumergirá al lector en un mundo fantástico ambientado a la perfección. Rothfuss, renueva el término Fantasía épica y la lleva a un nivel personal donde seremos el protagonista de la aventura.', '10,76');
            $this->llistaLlibres[] = new Llibre('3243241232142','A Little Princess', '123', 'Frances Hodgson Burnett',$cat->getCategoria('5'),'tapa blanda','Oxford University Press',$idioma->getIdioma('3'),'Sara Crewe is a very rich little girl. She first comes to England when she is seven, and her father takes her to Miss Minchin\'s school in London. Then he goes back to his work in India. Sara is very sad at first, but she soon makes friends at school.','7,90');
            $this->llistaLlibres[] = new Llibre('9788498387544', 'El Temor De Un Hombre Sabio ', '336', 'Patrick Rothfuss', $cat->getCategoria('3'), 'tapa dura', 'PLAZA & JANES EDITORES',  $idioma->getIdioma('2'), 'Es la mañana del segundo día, y tres hombres se sientan a una mesa de Roca de Guía: un posadero de cabello rojo como una llama, su pupilo Bast y Cronista, que moja la pluma en el tintero y se prepara a transcribir...', '19,87');
            $this->llistaLlibres[] = new Llibre('6576576573451','Los Herederos de la Tierra', '896', 'Ildefonso Falcones',$cat->getCategoria('4'),'tapa dura','Grijalbo', $idioma->getIdioma('2'),'Las campanas de la iglesia de Santa María de la Mar siguen sonando para todos los habitantes del barrio de la Ribera, pero uno de ellos escucha su repique con especial atención...','22,90');
            $this->llistaLlibres[] = new Llibre('5432341254657', 'La Musica del Silencio', '160', 'Patrick Rothfuss', $cat->getCategoria('3'), 'tapa dura', 'PLAZA & JANES EDITORES',  $idioma->getIdioma('2'), 'Una historia lírica, evocadora, sugestiva y rica en detalles, protagonizada por uno de los personajes más queridos de las aclamadas novelas de Patrick Rothfuss. Una novela corta que arroja algo más de luz sobre la historia de Kvothe y el universo de la Crónica del Asesino de Reyes.', '15,40');
            $this->llistaLlibres[] = new Llibre('6786785845435', 'Los Romanov', '992', 'Simon Sebag ', $cat->getCategoria('2'), 'tapa dura', 'sfsd',  $idioma->getIdioma('2'), 'Los Románov gobernaron Rusia como zares y emperadores durante trescientos años. A través de la fuerza implacable de su personalidad, esta familia de peculiares pero brillantes autócratas transformó un reino débil y arruinado por la guerra civil en un imperio que dominó Europa.', '32,90');
            $this->llistaLlibres[] = new Llibre('4342123124124', 'El Ultimo Deseo', '254', 'Aandrzej Sapkowski', $cat->getCategoria('3'), 'tapa blanda', 'Alamut Ediciones',  $idioma->getIdioma('2'), 'Geralt de Rivia, brujo y mutante sobrehumano, se gana la vida como cazador de monstruos en una tierra de magia y maravilla: con sus dos espadas al hombro -la de acero para hombres, y la de plata para bestias- da cuenta de estriges, manticoras, grifos, vampiros, quimeras y lobisomes, pero sólo cuando amenazan la paz. ', '22,32');
            $this->llistaLlibres[] = new Llibre('7657456345345','La Historia Del Arte', '688', 'E. H. Gombrich',$cat->getCategoria('6'),'tapa dura','PHAIDON PRESS LIMITED', $idioma->getIdioma('2'),'El libro de arte más célebre y popular de todos los tiempos, La historia del arte ha sido un éxito de ventas internacional durante más de medio siglo, y se ha traducido a 34 idiomas.','55,00');
            $this->llistaLlibres[] = new Llibre('7654535234234','Cien Sonetos De Amor', '128', 'Pablo Neruda',$cat->getCategoria('1'),'tapa blanda','Seix Barral', $idioma->getIdioma('2'),'úspide, desde la perspectiva de la plenitud de la edad, de la poesía amorosa nerudiana, estos Cien sonetos de amor sorprenden ante todo por el contraste entre la palpitación de la palabra y la imagen, y la deliberada elección de una desnudez que rehúye los prestigios sonoros o constructivos del soneto clásico. ','6,95');
            $this->llistaLlibres[] = new Llibre('4234234234234','Todo esto te dare', '624', 'Dolores Redondo',$cat->getCategoria('7'),'tapa dura','Planeta', $idioma->getIdioma('2'),'En el escenario majestuoso de la Ribeira Sacra, Álvaro sufre un accidente que acabará con su vida. Cuando Manuel, su marido, llega a Galicia para reconocer el cadáver, descubre que la investigación sobre el caso se ha cerrado con demasiada rapidez...','20,81');
            $this->llistaLlibres[] = new Llibre('765765765858', 'La Maga', '688', 'Trudi Canavan', $cat->getCategoria('3'), 'tapa blanda', 'DeBolsillo',  $idioma->getIdioma('2'), 'Los orígenes de las Crónicas del mago negroEn el remoto pueblo de Mandryn, la joven Tessia hace de ayudante de su padre, el sanador local, para gran frustración de su madre, que preferiría que se dedicara a buscar marido.', '10,99');
            $this->llistaLlibres[] = new Llibre('7342342345523','Le Tour Dur Monde', '112', 'VV.AA',$cat->getCategoria('5'),'tapa blanda','Vicens-vives', $idioma->getIdioma('4'),'CHAT NOIR. LIRE ET S\'ENTRAINER AX.ALUM/IDIOMAS GENERAL','12,25');
            $_SESSION['llistaLlibresSes'] = &$this->llistaLlibres;
        } else {
            $this->llistaLlibres = &$_SESSION['llistaLlibresSes'];
        }
    }

    function afegirLlibre($isbn, $nom, $numPag, $autor, $categoria, $cubierta, $editorial, $llengua, $resumen, $preu) {
        $cat = new CategoriaDAO();
        $idioma = new IdiomaDAO();
        $newCategoria = $cat->getCategoria($categoria);
        $newIdioma = $idioma->getIdioma($llengua);
        $this->llistaLlibres[] = new Llibre($isbn, $nom, $numPag, $autor, $newCategoria, $cubierta, $editorial, $newIdioma, $resumen, $preu);
    }

    function eliminarLlibre($llibre) {
        $borrado = false;
        foreach ($this->llistaLlibres as $key => $data) {
            if ($data->isbn == $llibre->isbn) {
                unset($llibre);
                unset($this->llistaLlibres[$key]);
                $borrado = true;
            }
        }
        return $borrado;
    }

    function getLlibre($isbn) {
        $llibre = null;
        foreach ($this->llistaLlibres as $data) {
            if ($data->isbn == $isbn) {
                $llibre = $data;
            }
        }
        return $llibre;
    }

    function modificarLlibre($llibre, $isbn, $nom, $numPag, $autor, $categoria, $cubierta, $editorial, $llengua, $resumen, $preu) {
        $cat = new CategoriaDAO();
        $llibre->isbn = $isbn;
        $llibre->nom = $nom;
        $llibre->numPag = $numPag;
        $llibre->autor = $autor;        
        $llibre->categoria = $cat->getCategoria($categoria);
        $llibre->cubierta = $cubierta;
        $llibre->editorial = $editorial;
        $llibre->llengua = $llengua;
        $llibre->resum = $resumen;
        $llibre->preu = $preu;
    }

    function cercar($categoria = NULL, $limit = 12) {
        if (!$categoria) {
            $res = $this->llistaLlibres;
        } else if (!$categoria || $limit == 0) {
            $res = [];
            foreach ($this->llistaLlibres as $data):
                if ($data->categoria->id == $categoria) {
                    $res[] = $data;
                }
            endforeach;
        } else {
            $res = [];
            foreach ($this->llistaLlibres as $data):
                if ($limit <= 0)
                    break;
                if ($data->categoria->id == $categoria) {
                    $res[] = $data;
                    $limit--;
                }
            endforeach;
        }
        return $res;
    }

}
