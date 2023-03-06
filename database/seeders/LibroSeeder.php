<?php

namespace Database\Seeders;

use App\Models\Libro;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LibroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // Accion vvvvvvvvvvvvvvvvvvvvvv
        $libro1 = new Libro();
        $libro1->nombre = "Crónicas de Nuncanoche 1";
        $libro1->autor = "Jay Kristoff";
        $libro1->descripcion = "Nunca te encojas. Nunca temas. Y nunca, jamás, olvides. En una tierra de tres soles que nunca dan paso a la oscuridad, la joven asesina Mia Corvere acaba de unirse a la banda más mortífera de la República. De niña, Mia sobrevivió sola y a duras penas tras la rebelión fallida de su padre, que murió ejecutado por traición. Pero su misterioso don para conversar con las sombras la llevó por un camino más siniestro de lo que jamás hubiera podido imaginar. Ahora, años más tarde, debe demostrar su valía en la Iglesia Roja. Los pasillos de esta escuela de asesinos están llenos de traiciones y, para llegar a ser la adversaria que desea, Mia tiene que sobrevivir a la iniciación. Si lo logra, estará un paso más cerca de su único objetivo: venganza.";
        $libro1->genero = "Accion";
        $libro1->publicacion = "2018-03-24";
        $libro1->imagen = "../../public/imgs/Nuncanoche.jpg";
        $libro1->reservas = 0;
        $libro1->save();


        $libro2 = new Libro();
        $libro2->nombre = "La última revelación";
        $libro2->autor = "Fernando Gamboa";
        $libro2->descripcion = "Tras su regreso del Amazonas, las cosas no han ido bien para Cassie, Eduardo y Ulises. El relato de lo que vivieron en Ciudad Negra resulta tan extraordinario que son tachados de farsantes y denostados públicamente y lo que debería haber sido un épico triunfo, se ha convertido en un dramático revés. Para demostrar que dicen la verdad y recuperar sus vidas, no les quedará más remedio que adentrarse de nuevo en lo desconocido en busca de las pruebas irrefutables que necesitan. Una búsqueda que llevará a Ulises, Cassandra y el profesor Castillo a vivir la aventura más increíble de sus vidas. Una última aventura en busca de La última revelación.";
        $libro2->genero = "Accion";
        $libro2->publicacion = "2019-03-24";
        $libro2->imagen = "../../public/imgs/Laultimarevelacion.jpg";
        $libro2->reservas = 0;
        $libro2->save();

        $libro3 = new Libro();
        $libro3->nombre = "Marfil";
        $libro3->autor = "Mercedes Ron";
        $libro3->descripcion = "Marfil tiene 20 años y vive en Nueva York, pero no todo es tan idílico como parece: hace unos días fue secuestrada mientras paseaba por Central Park. Su padre tiene muy claro que la razón del secuestro ha sido para mandarle un mensaje: podemos llegar a ella.
        A pesar de ser liberada, todo ha cambiado para Marfil: su vida no es la misma, y ella tampoco. Sobre todo, porque ahora nunca está sola: siempre la acompaña Sebastian Moore, su guardaespaldas.
        Sebastian demostrará ser el encargado perfecto para protegerla, sobre todo cuando comienzan a llegar las amenazas de muerte, aunque nunca hubiese pensado que la tarea más complicada no sería esa, sino mantener a Marfil Cortes alejada de él.
        ¿Está Marfil preparada para descubrir la verdad de su pasado? ¿Lo pondrá todo en riesgo la atracción que ha surgido entre ambos?";
        $libro3->genero = "Accion";
        $libro3->publicacion = "2020-03-24";
        $libro3->imagen = "../../public/imgs/Marfil.jpg";
        $libro3->reservas = 0;
        $libro3->save();

        $libro4 = new Libro();
        $libro4->nombre = "Revolución";
        $libro4->autor = "Arturo Pérez Reverte";
        $libro4->descripcion = "Ésta es la historia de un hombre, tres mujeres, una revolución y un tesoro. La revolución fue la de México en tiempos de Emiliano Zapata y Francisco Villa. El tesoro fueron quince mil monedas de oro de a veinte pesos de las denominadas maximilianos, robadas en un banco de Ciudad Juárez el 8 de mayo de 1911. El hombre se llamaba Martín Garret Ortizy era un joven ingeniero de minas español. Todo empezó para él ese mismo día, cuando desde su hotel oyó un primer disparo lejano. Salió a la calle para ver qué ocurría y a partir de ese momento su vida cambió para siempre...";
        $libro4->genero = "Accion";
        $libro4->publicacion = "2021-03-24";
        $libro4->imagen = "../../public/imgs/Revolucion.jpg";
        $libro4->reservas = 0;
        $libro4->save();

        $libro5 = new Libro();
        $libro5->nombre = "Viaje al centro de la tierra ";
        $libro5->autor = "Julio Verne";
        $libro5->descripcion = "El desciframiento de una inscripción escrita por un alquimista islandés del siglo XVI, Arne saknussemm, le revela al profesor de minerología Otto Lidenbrock el camino para llegar al centro de la Tierra. En compañía de su sobrino Axel y del guía hans, decide emprender una fascinante expedición que, a través del cráter y la chimenea de un volcán extinguido, les ha de conducir a las entrañas de la Tierra.";
        $libro5->genero = "Accion";
        $libro5->publicacion = "2022-03-24";
        $libro5->imagen = "../../public/imgs/Viajealcentrodelatierra.jpg";
        $libro5->reservas = 0;
        $libro5->save();

        // Ciencia ficion vvvvvvvvvvvvvvvvvvvvvvvv

        $libro6 = new Libro();
        $libro6->nombre = "Escuadrón";
        $libro6->autor = "Brandon Sanderson";
        $libro6->descripcion = "El mundo lleva siglos en guerra; la humanidad está atrapada en un planeta constantemente atacado por unos alienígenas decididos a destruirla. Los pilotos son los únicos héroes dispuestos a combatir el enemigo.
        Spensa es una joven que siempre ha soñado convertirse en piloto y defender a la Tierra. Pero su destino se cruza con el de su padre, un piloto que fue asesinado tras abandonar a su equipo, anulando sus opciones de asistir a la escuela de vuelo. De pronto, el ataque alienígena ha hecho duplicar la flota aérea de los humanos, facilitando que Spensa ahora sí pueda volar al espacio... ";
        $libro6->genero = "Ciencia Ficcion";
        $libro6->publicacion = "2018-03-24";
        $libro6->imagen = "../../public/imgs/Escuadron.jpg";
        $libro6->reservas = 0;
        $libro6->save();

        $libro7 = new Libro();
        $libro7->nombre = "Ready Player One";
        $libro7->autor = "Ernest Cline";
        $libro7->descripcion = "Estamos en el año 2044 y, como el resto de la humanidad, Wade Watts prefiere mil veces el videojuego de OASIS al cada vez más sombrío mundo real.
        Se asegura que esconde las diabólicas piezas de un rompecabezas cuya resolución conduce a una fortuna incalculable. Las claves del enigma están basadas en la cultura de finales del siglo XX y, durante años, millones de humanos han intentado dar con ellas, sin éxito.
        De repente, Wade logra resolver el primer rompecabezas del premio, y, a partir de ese momento, debe competir contra miles de jugadores para conseguir el trofeo.
        La única forma de sobrevivir es ganar; pero para hacerlo tendrá que abandonar su existencia virtual y enfrentarse a la vida y al amor en el mundo real, del que siempre ha intentado escapar.";
        $libro7->genero = "Ciencia Ficcion";
        $libro7->publicacion = "2017-03-24";
        $libro7->imagen = "../../public/imgs/Readyplayerone.jpg";
        $libro7->reservas = 0;
        $libro7->save();

        $libro8 = new Libro();
        $libro8->nombre = "Gideon la novena";
        $libro8->autor = "Tamsyn Muir";
        $libro8->descripcion = "El Emperador necesita nigromantes. La nigromante de la Novena necesita una espadachina. Gideon tiene una espada, unas revistas guarras y ninguna paciencia para tonterías con los muertos vivientes.
        Después de haber sido criada por profesoras antipáticas y osificadas, sirvientes vetustos y una infinidad de esqueletos, Gideon está lista para abandonar una vida de servidumbre y un más allá como cadáver reanimado. Mete su espada y sus revistas guarras en la maleta y se prepara para su audaz escapada. Pero su némesis de la infancia no piensa dejar que se libere, así como así.
        Harrowhark Nonagesimus, reverenda hija de la Novena Casa y extraordinaria bruja de los huesos, ha sido convocada. El Emperador ha invitado a los herederos de cada una de sus leales casas a una prueba mortal que someterá a examen su inteligencia y sus habilidades. Si Harrowhark Nonagesimus tiene éxito, se convertirá en una sirviente inmortal y todopoderosa de la Resurrección, pero ningún nigromante ha sido capaz de conseguirlo sin la ayuda de su caballero. Sin la espada de Gideon, Harrow fracasará y la Novena Casa terminará por desaparecer.
        Y hay cosas que es mejor dejar muertas.";
        $libro8->genero = "Ciencia Ficcion";
        $libro8->publicacion = "2016-03-24";
        $libro8->imagen = "../../public/imgs/Gideonlanovena.jpg";
        $libro8->reservas = 0;
        $libro8->save();

        $libro9 = new Libro();
        $libro9->nombre = "Las crónicas de Dune 1";
        $libro9->autor = "Frank Herbert";
        $libro9->descripcion = "En el desértico planeta Arrakis, el agua es el bien más preciado y llorar a los muertos, el símbolo de máxima prodigalidad. Pero algo hace de Arrakis una pieza estratégica para los intereses del Emperador, las Grandes Casas y la Cofradía, los tres grandes poderes de la galaxia. Arrakis es el único origen conocido de la melange, preciosa especia y uno de los bienes más codiciados del universo.
        Al duque Leto Atreides se le asigna el gobierno de este mundo inhóspito, habitado por los indómitos Fremen y monstruosos gusanos de arena de centenares de metros de longitud. Sin embargo, cuando la familia es traicionada, su hijo y heredero, Paul, emprenderá un viaje hacia un destino más grande del que jamás hubiese podido soñar.";
        $libro9->genero = "Ciencia Ficcion";
        $libro9->publicacion = "2015-03-24";
        $libro9->imagen = "../../public/imgs/Dune.jpg";
        $libro9->reservas = 0;
        $libro9->save();

        $libro10 = new Libro();
        $libro10->nombre = "Soy leyenda";
        $libro10->autor = "Richard Matheson";
        $libro10->descripcion = "Robert Neville es el único superviviente de una guerra bacteriológica que ha asolado el planeta y convertido al resto de la humanidad en vampiros. Su vida se ha reducido a asesinar el máximo número posible de estos seres sanguinarios durante el día, y a soportar su asedio cada noche. Para ellos, el auténtico monstruo es este hombre que lucha por subsistir en un nuevo orden establecido.";
        $libro10->genero = "Accion";
        $libro10->publicacion = "2014-03-24";
        $libro10->imagen = "../../public/imgs/Soyleyenda.jpg";
        $libro10->reservas = 0;
        $libro10->save();
    }
}