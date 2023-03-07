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
        $libro1->imagen = "../public/imgs/Nuncanoche.jpg";
        $libro1->lecturas = 5;
        $libro1->save();


        $libro2 = new Libro();
        $libro2->nombre = "La última revelación";
        $libro2->autor = "Fernando Gamboa";
        $libro2->descripcion = "Tras su regreso del Amazonas, las cosas no han ido bien para Cassie, Eduardo y Ulises. El relato de lo que vivieron en Ciudad Negra resulta tan extraordinario que son tachados de farsantes y denostados públicamente y lo que debería haber sido un épico triunfo, se ha convertido en un dramático revés. Para demostrar que dicen la verdad y recuperar sus vidas, no les quedará más remedio que adentrarse de nuevo en lo desconocido en busca de las pruebas irrefutables que necesitan. Una búsqueda que llevará a Ulises, Cassandra y el profesor Castillo a vivir la aventura más increíble de sus vidas. Una última aventura en busca de La última revelación.";
        $libro2->genero = "Accion";
        $libro2->publicacion = "2019-03-24";
        $libro2->imagen = "../public/imgs/Laultimarevelacion.jpg";
        $libro2->lecturas = 8;
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
        $libro3->imagen = "../public/imgs/Marfil.jpg";
        $libro3->lecturas = 3;
        $libro3->save();

        $libro4 = new Libro();
        $libro4->nombre = "Revolución";
        $libro4->autor = "Arturo Pérez Reverte";
        $libro4->descripcion = "Ésta es la historia de un hombre, tres mujeres, una revolución y un tesoro. La revolución fue la de México en tiempos de Emiliano Zapata y Francisco Villa. El tesoro fueron quince mil monedas de oro de a veinte pesos de las denominadas maximilianos, robadas en un banco de Ciudad Juárez el 8 de mayo de 1911. El hombre se llamaba Martín Garret Ortizy era un joven ingeniero de minas español. Todo empezó para él ese mismo día, cuando desde su hotel oyó un primer disparo lejano. Salió a la calle para ver qué ocurría y a partir de ese momento su vida cambió para siempre...";
        $libro4->genero = "Accion";
        $libro4->publicacion = "2021-03-24";
        $libro4->imagen = "../public/imgs/Revolucion.jpg";
        $libro4->lecturas = 5;
        $libro4->save();

        $libro5 = new Libro();
        $libro5->nombre = "Viaje al centro de la tierra";
        $libro5->autor = "Julio Verne";
        $libro5->descripcion = "El desciframiento de una inscripción escrita por un alquimista islandés del siglo XVI, Arne saknussemm, le revela al profesor de minerología Otto Lidenbrock el camino para llegar al centro de la Tierra. En compañía de su sobrino Axel y del guía hans, decide emprender una fascinante expedición que, a través del cráter y la chimenea de un volcán extinguido, les ha de conducir a las entrañas de la Tierra.";
        $libro5->genero = "Accion";
        $libro5->publicacion = "2022-03-24";
        $libro5->imagen = "../public/imgs/Viajealcentrodelatierra.jpg";
        $libro5->lecturas = 5;
        $libro5->save();

        // Ciencia ficion vvvvvvvvvvvvvvvvvvvvvvvv

        $libro6 = new Libro();
        $libro6->nombre = "Escuadrón";
        $libro6->autor = "Brandon Sanderson";
        $libro6->descripcion = "El mundo lleva siglos en guerra; la humanidad está atrapada en un planeta constantemente atacado por unos alienígenas decididos a destruirla. Los pilotos son los únicos héroes dispuestos a combatir el enemigo.
        Spensa es una joven que siempre ha soñado convertirse en piloto y defender a la Tierra. Pero su destino se cruza con el de su padre, un piloto que fue asesinado tras abandonar a su equipo, anulando sus opciones de asistir a la escuela de vuelo. De pronto, el ataque alienígena ha hecho duplicar la flota aérea de los humanos, facilitando que Spensa ahora sí pueda volar al espacio... ";
        $libro6->genero = "Ciencia Ficcion";
        $libro6->publicacion = "2018-03-24";
        $libro6->imagen = "../public/imgs/Escuadron.jpg";
        $libro6->lecturas = 10;
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
        $libro7->imagen = "../public/imgs/Readyplayerone.jpg";
        $libro7->lecturas = 5;
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
        $libro8->imagen = "../public/imgs/Gideonlanovena.jpg";
        $libro8->lecturas = 13;
        $libro8->save();

        $libro9 = new Libro();
        $libro9->nombre = "Las crónicas de Dune 1";
        $libro9->autor = "Frank Herbert";
        $libro9->descripcion = "En el desértico planeta Arrakis, el agua es el bien más preciado y llorar a los muertos, el símbolo de máxima prodigalidad. Pero algo hace de Arrakis una pieza estratégica para los intereses del Emperador, las Grandes Casas y la Cofradía, los tres grandes poderes de la galaxia. Arrakis es el único origen conocido de la melange, preciosa especia y uno de los bienes más codiciados del universo.
        Al duque Leto Atreides se le asigna el gobierno de este mundo inhóspito, habitado por los indómitos Fremen y monstruosos gusanos de arena de centenares de metros de longitud. Sin embargo, cuando la familia es traicionada, su hijo y heredero, Paul, emprenderá un viaje hacia un destino más grande del que jamás hubiese podido soñar.";
        $libro9->genero = "Ciencia Ficcion";
        $libro9->publicacion = "2015-03-24";
        $libro9->imagen = "../public/imgs/Dune.jpg";
        $libro9->lecturas = 5;
        $libro9->save();

        $libro10 = new Libro();
        $libro10->nombre = "Soy leyenda";
        $libro10->autor = "Richard Matheson";
        $libro10->descripcion = "Robert Neville es el único superviviente de una guerra bacteriológica que ha asolado el planeta y convertido al resto de la humanidad en vampiros. Su vida se ha reducido a asesinar el máximo número posible de estos seres sanguinarios durante el día, y a soportar su asedio cada noche. Para ellos, el auténtico monstruo es este hombre que lucha por subsistir en un nuevo orden establecido.";
        $libro10->genero = "Accion";
        $libro10->publicacion = "2014-03-24";
        $libro10->imagen = "../public/imgs/Soyleyenda.jpg";
        $libro10->lecturas = 1;
        $libro10->save();

        // Drama vvvvvvvvvvvv

        $libro11 = new Libro();
        $libro11->nombre = "Al final mueren los dos";
        $libro11->autor = "Adam Silvera";
        $libro11->descripcion = "Hola, te llamamos desde Muerte Súbita y lamentamos informarte de que morirás en algún momento de las próximas veinticuatro horas.
        Mateo Torrez y Rufus Emeterio no se han conocido en clase ni en una fiesta, como cualquier otro chico de su edad. Ellos lo han hecho a través de Último Amigo, una aplicación creada para que aquellas personas que han recibido la llamada de Muerte Súbita, una organización que anuncia que tu muerte está a la vuelta de la esquina, puedan acompañarse en sus últimas horas.
        Mateo y Rufus no podrían ser más distintos, pero pronto comprenderán que los une algo mucho más que un final inminente. Juntos, están a punto de descubrir que nunca es tarde para derribar los muros; ni para reparar todo aquello que habrías hecho de otra manera si pudieras empezar de cero. Y sí, puede que los dos hayan recibido la llamada de la Muerte, pero, a lo largo de este último día, la vida y el amor pueden encenderse en sus corazones con mucha intensidad.";
        $libro11->genero = "Drama";
        $libro11->publicacion = "2014-04-24";
        $libro11->imagen = "";
        $libro11->lecturas = 5;
        $libro11->save();

        $libro12 = new Libro();
        $libro12->nombre = "Bajo la misma estrella";
        $libro12->autor = "John Green";
        $libro12->descripcion = "A Hazel y a Gus les gustaría tener vidas más corrientes. Algunos dirían que no han nacido con estrella, que su mundo es injusto. Hazel y Gus son solo adolescentes, pero si algo les ha enseñado el cáncer que ambos padecen es que no hay tiempo para lamentaciones, porque, nos guste o no, solo existe el hoy y el ahora. Y por ello, con la intención de hacer realidad el mayor deseo de Hazel -conocer a su escritor favorito-, cruzarán juntos el Atlántico para vivir una aventura contrarreloj, tan catártica como desgarradora. Destino: Amsterdam, el lugar donde reside el enigmático y malhumorado escritor, la única persona que tal vez pueda ayudarles a ordenar las piezas del enorme puzle del que forman parte...";
        $libro12->genero = "Drama";
        $libro12->publicacion = "2014-05-24";
        $libro12->imagen = "";
        $libro12->lecturas = 20;
        $libro12->save();

        $libro13 = new Libro();
        $libro13->nombre = "El niño con el pijama de rayas";
        $libro13->autor = "John Boyne";
        $libro13->descripcion = "Estimado lector, estimada lectora:
        Aunque el uso habitual de un texto como éste es describir las características de la obra, por una vez nos tomaremos la libertad de hacer una excepción a la norma establecida. No sólo porque el libro que tienes en tus manos es muy difícil de definir, sino porque estamos convencidos de que explicar su contenido estropearía la experiencia de la lectura. Creemos que es importante empezar esta novela sin saber de qué trata.
        No obstante, si decides embarcarte en la aventura, debes saber que acompañarás a Bruno, un niño de nueve años, cuando se muda con su familia a una casa junto a una cerca. Cercas como ésa existen en muchos sitios del mundo, sólo deseamos que no te encuentres nunca con una. Por último, cabe aclarar que este libro no es sólo para adultos; también lo pueden leer, y sería recomendable que lo hicieran, niños a partir de los trece años de edad.
        El editor";
        $libro13->genero = "Drama";
        $libro13->publicacion = "2014-05-24";
        $libro13->imagen = "";
        $libro13->lecturas = 7;
        $libro13->save();

        $libro14 = new Libro();
        $libro14->nombre = "Invisible";
        $libro14->autor = "Eloy Moreno";
        $libro14->descripcion = "¿Quién no ha deseado alguna vez ser invisible?
        ¿Quién no ha deseado alguna vez dejar de serlo?
        El problema es que nunca he llegado a controlar bien ese poder:
        A veces, cuando más ganas tenía de ser invisible, era cuando más gente me veía, y en cambio, cuando deseaba que todos me vieran, era cuando a mi cuerpo le daba por desaparecer. ";
        $libro14->genero = "Drama";
        $libro14->publicacion = "2014-06-24";
        $libro14->imagen = "";
        $libro14->lecturas = 2;
        $libro14->save();

        $libro15 = new Libro();
        $libro15->nombre = "La vida invisible de Addie LaRue";
        $libro15->autor = "V.E. Schwab";
        $libro15->descripcion = "Tras hacer un pacto con el diablo, Addie entrega su alma a cambio de la inmortalidad. Sin embargo, ningún trato faustiano está exento de consecuencias: el diablo le entregará la inmortalidad que tanto desea, pero le quitará algo que ella anhelará durante toda su existencia: la posibilidad de ser recordada. Addie abandona su pequeño pueblo natal en la Francia del siglo XVIII y comienza un viaje que la lleva por todo el mundo, mientras aprende a vivir una vida en la que nadie la recuerda y todo lo que posee acaba perdido o roto. Durante trescientos años, Addie LaRue no será más que la musa de numerosos artistas a lo largo de la historia, y tendrá que aprender a enamorarse de nuevo cada día, y a ser olvidada a la mañana siguiente. Su único compañero en este viaje es su oscuro demonio de hipnóticos ojos verdes, quien la visita cada año en el día del aniversario de su trato. Completamente sola, a Addie no le queda más remedio que enfrentarse a él, comprenderlo y, tal vez, ganarle la partida. Pero un día, en una librería de segunda mano de Manhattan, Addie conoce a alguien que pone su mundo del revés... Por primera vez, alguien la recuerda. ¿Será este el punto final de la vida de Addie LaRue? ¿O tan solo serán puntos suspensivos? ";
        $libro15->genero = "Drama";
        $libro15->publicacion = "2014-07-24";
        $libro15->imagen = "";
        $libro15->lecturas = 5;
        $libro15->save();

        // Fantasia vvvvvvvvvvvvvvvvvvvv
        $libro16 = new Libro();
        $libro16->nombre = "De sangre y cenizas";
        $libro16->autor = "Jennifer L. Armentrout";
        $libro16->descripcion = "UNA DONCELLA. 
        Elegida desde su nacimiento para dar comienzo a una nueva era, la vida de Poppy nunca le ha pertenecido. La vida de la Doncella es solitaria. Jamás la tocarán. Jamás la mirarán. Jamás le hablarán. Jamás sentirá placer. Mientras espera el día de su Ascensión, preferiría estar con los guardias luchando contra el mal que se llevó a su familia que preparándose para que los dioses la encuentren lo bastante digna. Pero la elección nunca ha sido suya.
        UN DEBER.
        El futuro del reino entero recae sobre los hombros de Poppy, algo que ni siquiera está demasiado segura de querer para ella. Porque la Doncella tiene corazón. Y alma. Y deseo. Y cuando Hawke, un guardia de ojos dorados que ha jurado garantizar su Ascensión, entra en su vida, el destino y el deber se entremezclan con el deseo y la necesidad. Él incita su ira, hace que se cuestione todo aquello en lo que cree y la tienta con lo prohibido.
        UN REINO.
        Abandonado por los dioses y temido por los mortales, un reino caído está resurgiendo, decidido a recuperar lo que cree que es suyo mediante la violencia y la venganza. Y a medida que la sombra de los malditos se acerca, la línea entre lo prohibido y lo correcto se difumina. Poppy no solo está a punto de perder el corazón y ser considerada indigna por los dioses, sino que también está a punto de perder la vida cuando los ensangrentados hilos que mantienen unido su mundo empiezan a deshilacharse.";
        $libro16->genero = "Fantasia";
        $libro16->publicacion = "2015-07-25";
        $libro16->imagen = "";
        $libro16->lecturas = 5;
        $libro16->save();

        $libro17 = new Libro();
        $libro17->nombre = "El nombre del viento";
        $libro17->autor = "Patrick Rothfuss";
        $libro17->descripcion = "En una posada en tierra de nadie, un hombre se dispone a relatar, por primera vez, la auténtica historia de su vida. Una historia que únicamente él conoce y que ha quedado diluida tras los rumores, las conjeturas y los cuentos de taberna que le han convertido en un personaje legendario a quien todos daban ya por muerto: Kvothe... músico, mendigo, ladrón, estudiante, mago, héroe y asesino.
        Ahora va a revelar la verdad sobre sí mismo. Y para ello debe empezar por el principio: su infancia en una troupe de artistas itinerantes, los años malviviendo como un ladronzuelo en las calles de una gran ciudad y su llegada a una universidad donde esperaba encontrar todas las respuestas que había estado buscando.
        «Viajé, amé, perdí, confié y me traicionaron».
        «He robado princesas a reyes agónicos. Incendié la ciudad de Trebon. He pasado la noche con Felurian y he despertado vivo y cuerdo. Me expulsaron de la Universidad a una edad a la que a la mayoría todavía no los dejan entrar. He recorrido de noche caminos de los que otros no se atreven a hablar ni siquiera de día. He hablado con dioses, he amado a mujeres y he escrito canciones que hacen llorar a los bardos.
        «Me llamo Kvothe. Quizá hayas oído hablar de mí».";
        $libro17->genero = "Fantasia";
        $libro17->publicacion = "2016-07-26";
        $libro17->imagen = "";
        $libro17->lecturas = 5;
        $libro17->save();

        $libro18 = new Libro();
        $libro18->nombre = "El reino de los malditos";
        $libro18->autor = "Kerri Maniscalco";
        $libro18->descripcion = "Dos hermanas.
        Un despiadado asesinato.
        Una búsqueda de venganza que desatará el mismísimo infierno.
        Y un romance embriagador.
        Emilia y su hermana gemela Vittoria son streghe: brujas que viven en secreto entre los humanos, evitando llamar la atención y ser perseguidas. Pero una noche, Vittoria se pierde el turno de la cena en el famoso restaurante siciliano que regenta la familia. Y Emilia pronto encuentra el cuerpo de su querida gemela... profanado más allá de lo imaginable. Devastada, se propone encontrar al asesino de su hermana y conseguir venganza a cualquier precio, incluso si eso significa usar magia oscura, que lleva mucho tiempo prohibida.";
        $libro18->genero = "Fantasia";
        $libro18->publicacion = "2016-07-26";
        $libro18->imagen = "";
        $libro18->lecturas = 5;
        $libro18->save();

        $libro19 = new Libro();
        $libro19->nombre = "Seis de cuervos";
        $libro19->autor = "Leigh Bardugo";
        $libro19->descripcion = "Ketterdam: Un desbordante foco de comercio internacional donde todo se puede conseguir por el precio adecuado, como bien sabe el prodigio criminal Kaz Brekker. A Kaz le acaban de ofrecer la oportunidad de llevar a cabo un gran robo, un arriesgado golpe que podría hacerle más rico de lo que jamás se ha atrevido a imaginar en sus sueños más salvajes. Pero no podrá llevarlo a cabo por sí solo: tendrá que reclutar a un peculiar equipo formado por un convicto, una espía, un pistolero, una Grisha, un ladrón y un fugitivo. Aunque ellos no lo saben, llegado el momento los miembros del grupo de Kaz serán los únicos capaces de salvar el mundo de la aniquilación total. Bueno, lo serán si no se matan entre ellos primero.";
        $libro19->genero = "Fantasia";
        $libro19->publicacion = "2017-07-27";
        $libro19->imagen = "";
        $libro19->lecturas = 5;
        $libro19->save();

        $libro20 = new Libro();
        $libro20->nombre = "Una corte de rosas y espinas";
        $libro20->autor = "Sarah J. Maas";
        $libro20->descripcion = "Cuando la cazadora Feyre mata a un lobo en el bosque, una criatura bestial irrumpe en su casa para exigir una compensación. Así, es trasladada a una tierra mágica y engañosa de la que solo había oído hablar en las leyendas, donde Feyre descubre que su captor no es un animal sino Tamlin: una divinidad inmortal y letal que alguna vez reinó en su mundo.
        Mientras Feyre vive en su castillo, lo que siente por Tamlin muta de una hostilidad helada a una pasión ardiente y feroz, a pesar de todas las mentiras y advertencias a las que queda expuesta en ese mundo fantástico, bello y peligroso. Además, una vil sombra ancestral crece sobre la tierra de las hadas día a día, y Feyre debe encontrar la forma de detenerla... o condenar a Tamlin –y a su mundo– para siempre.";
        $libro20->genero = "Fantasia";
        $libro20->publicacion = "2018-07-28";
        $libro20->imagen = "";
        $libro20->lecturas = 5;
        $libro20->save();

        // Infantil vvvvvvvvvv
        $libro21 = new Libro();
        $libro21->nombre = "El Principito";
        $libro21->autor = "Antoine de Saint-Exupéry";
        $libro21->descripcion = "Fábula mítica y relato filosófico que interroga acerca de la relación del ser humano con su prójimo y con el mundo, El Principito concentra, con maravillosa simplicidad, la constante reflexión de Saint-Exupery sobre la amistad, el amor, la responsabilidad y el sentido de la vida.
        'Viví así, solo, sin nadie con quien hablar verdaderamente, hasta que tuve una avería en el desierto del Sahara, hace seis años. Algo se había roto en mi motor. Y como no tenía conmigo ni mecánico ni pasajeros, me dispuse a realizar, solo, una reparación difícil. Era, para mí, cuestión de vida o muerte. Tenía agua apenas para ocho días.
        La primera noche dormí sobre la arena a mil millas de todatierra habitada. Estaba más aislado que un náufrago sobre una balsa en medio del oceano. Imaginaos, pues, mi sorpresa cuando, al romper el día, me despertó una extraña vocecita que decía:
        -Por favor..., ¡dibújame un cordero!
        - ¿Eh?
        -Dibújame un cordero...'";
        $libro21->genero = "Infantil";
        $libro21->publicacion = "2017-05-27";
        $libro21->imagen = "";
        $libro21->lecturas = 5;
        $libro21->save(); 

        $libro22 = new Libro();
        $libro22->nombre = "Elmer";
        $libro22->autor = "David Mckee";
        $libro22->descripcion = "Elmer no es como los otros elefantes de su manada. Aunque parezca difícil de creer, es un elefante de mil colores: verde, azul, blanco, rosa, amarillo... ¡Impresionante!, ¿verdad? Pero a Elmer no le hace ni pizca de gracia ser así, más bien está harto de ser distinto, así que un día decide escaparse de la manada y buscar un remedio para poder tener el mismo color de piel que los demás...";
        $libro22->genero = "Infantil";
        $libro22->publicacion = "2017-04-27";
        $libro22->imagen = "";
        $libro22->lecturas = 5;
        $libro22->save(); 

        $libro23 = new Libro();
        $libro23->nombre = "Un beso antes de dormir";
        $libro23->autor = "Teresa Tellechea Mora";
        $libro23->descripcion = "Un libro de cartón con tiernas ilustraciones para leer a tu hijo antes de ir a dormir.
        Todos los bebés animales besan a su madre antes de dormir. Un libro de cartón con tiernas ilustraciones para leer a tu hijo antes de ir a dormir.";
        $libro23->genero = "Infantil";
        $libro23->publicacion = "2017-03-27";
        $libro23->imagen = "";
        $libro23->lecturas = 5;
        $libro23->save(); 

        $libro24 = new Libro();
        $libro24->nombre = "GS 1: mi nombre es Stilton, Gerónimo Stilton";
        $libro24->autor = "Gerónimo Stilton";
        $libro24->descripcion = "¡La primera aventura de Gerónimo Stilton, el editor más morrocotudo de la Isla de los Ratones!
        Desde que he contratado a mi nueva ayudante Pinky Pick, me ha ocurrido de todo: me han obligado a pasar la Nochevieja en el Polo Norte, he recorrido kilómetros a la deriva sobre iceberg y he bailado salsa durante horas y horas...
        ¿Quién es Gerónimo Stilton? ¡Soy yo! Soy un tipo distraído, con la cabeza en las nubes... Dirijo un periódico, pero mi verdadera pasión es escribir. ¡Aquí en Ratonia, en la Isla de los Ratones, todos mis libros son unos bestsellers! Pero ¿cómo?, ¿no los conocéis? Son esas historias cómicas, tan tiernas como un queso de bola, tan gustosas como un gorgonzola y tan entretenidas como contarle los agujeros a una loncha de gruyer... En definitiva, historias morrocotudas, ¡palabra de Gerónimo Stilton!";
        $libro24->genero = "Infantil";
        $libro24->publicacion = "2017-02-27";
        $libro24->imagen = "";
        $libro24->lecturas = 5;
        $libro24->save();

        $libro25 = new Libro();
        $libro25->nombre = "Abracadabra, cole de magia para aprender a leer. Esta fiesta ¡apesta!";
        $libro25->autor = "Bárbara Fernández";
        $libro25->descripcion = "¡MENUDO FOLLÓN! En el Cole de Magia están de celebración. Es el cumple de Simón, el dragón, y están preparando un superfiestón. Pero la bruja Burbuja, cocinando la tarta, ¡¡¡la lía un montón!!! 'Abracadabra, Cole de Magia' es una serie llena de humor y sorpresas mágicas con la que los niños aprenderán a leer de forma divertida.";
        $libro25->genero = "Infantil";
        $libro25->publicacion = "2017-06-27";
        $libro25->imagen = "";
        $libro25->lecturas = 5;
        $libro25->save(); 

        // 
    }
}