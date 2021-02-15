<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->truncate();

        Book::create([
            'title' => 'Eragon',
            'description' =>'Eragon es una novela fantástica escrita por Christopher Paolini, el primer libro de la saga de Eragon. Su portada se identifica por un color de fondo azul y un Dragon.',
            'summary' => 'Eragon descubre una joya mientras está cazando en el bosque. Una valiosa gema resulta ser un huevo de dragón.
                    En el reino legendario de Alagaësis la guerra se está gestando. Los Jinetes, protectores de la paz del Imperio y los únicos capaces de controlar a los inteligentes dragones, se han extinguido o han pasado a formar parte de las tropas del malvado rey Galbatorix. Los elfos hace tiempo que se han exiliado a un lugar oculto, y los vardenos, un grupo disidente, se ocultan en ciudades protegidas .Cuando Eragon, un joven de 15 años, se encuentra con una piedra preciosa en medio del bosque, poco espera que ese suceso vaya a cambiar su vida y el destino de Alagaësa. Lo único que desea es venderla para así asegurar la subsistencia de su familia durante el duro invierno. Pero una noche la gema se rompe, y lo que sale de ella lo llevará a un viaje que lo convertirá en un héroe.',
        ]);

        Book::create([
            'title' => 'Legado',
            'description' =>'Legado es el cuarto y último libro de la saga El legado, del autor Christopher Paolini, quien también escribió los primeros tres libros de la saga: Eragon, Eldest y Brisingr.',
            'summary' => 'El Jinete y su dragona han llegado mucho más lejos de lo que nadie e atrevía ni siquiera a imaginar, pero ¿pueden derrocar al malvado Rey y devolver la justicia a Alagaësia? Y si así es ¿cuál será el precio que tendrán que pagar?
            No hace tanto tiempo, Eragon ?Asesino de sombra, Jinete de dragón?no era más que un pobre muchacho que vivía en una granja y su dragona, Saphira, una piedra azul oculta en el bosque. Ahora, el destino de una civilización recae sobre sus hombros. Los largos meses de entrenamiento y batallas les han traído victorias y esperanza pero también pérdidas terribles. Pero la verdadera batalla aún no ha llegado: deberán enfrentarse con Galbatorix. Cuando finalmente lo hagan, tendrán que ser lo suficientemente fuertes como para vencerle porque si ellos no lo hacen, nadie podrá. No habrá una segunda oportunidad.',
        ]);

        Book::create([
            'title' => 'Eldest',
            'description' =>'Eldest es la segunda novela de la planeada saga El legado de Christopher Paolini. Es la secuela de Eragon. La versión de bolsillo salió en septiembre de 2006.',
            'summary' => 'Eragon y su dragona, Saphira, acaban de impedir que las poderosas fuerzas del rey Galbatorix, cruel regente del Imperio, destruyan para siempre el ejército rebelde de los vardenos en Farthen Dur, la ciudad montaña de los enanos. Pocos días después de la sangrienta batalla contra los urgalos, Eragon y Saphira tienen que viajar a Ellesméra, el país de los elfos, para continuar con su formación en la magia y la lucha con la espada, las dos habilidades especiales de los Jinete de Dragón, para poder enfrentarse al malvado Rey. Los acompañarán Ayra, la elfa, y Orik, el enano, en un viaje plagado de descubrimientos y aventuras, con parajes fabulosos y nuevas amistades. Pero el caos y la traición los acecharán sin descanso, y Eragon no sabrá en quién confiar. Entre tanto, los sones inconfundibles de la guerra tienen en vilo al reino de Alagaësia. Las espadas se afilan y las nubes de oscuridad presagian terror y muerte. A Carvahall, cerca de las montañas Vertebradas, también llega el miedo: dos Ra´zac han aparecido acompañados de un destacamento para capturar a Roran, el primo de Eragon. Roran tendrá que huir, pero pronto se dará cuenta de que no es posible escapar siempre.',
            ]);
        Book::create([
            'title' => 'Brisingr',
            'description' =>'Brisingr es el tercer libro de la saga El legado, por Christopher Paolini, secuela de Eragon y Eldest. El título significa "fuego" en el ficticio idioma antiguo de Alagaësia.',
            'summary' => 'Eragon y su dragona, Saphira, han conseguido escapar con vida después de la colosal batalla contra los guerreros imperiales. Una vida que Eragon sabe sujeta a la fuerza de las promesas sin cumplir. La primera es la que Eragon le hizo a su primo Roran: rescatar a su amada, Katrina, de las garras del rey Galbatorix. Sin embargo, éste no es más que el primero de sus compromisos. Eragon también le debe la lealtad a los vardenos, quienes necesitan desesperadamente su talento y su fuerza, y lo mismo les sucede a elfos y enanos. Cuando los problemas empiezan a aflorar y el peligro ataca desde todos los flancos, Eragon se ve obligado a elegir. Una elección que podría llevarlo a recorrer el Imperio entero, e incluso más allá de sus fronteras; una elección que podría acabar con un sacrificio inimaginable. Eragon es la única esperanza de salvar Alagaësia de la tiranía. ¿Podrá el hijo de un granjero unir a las fuerzas rebeldes y vencer al Rey?',
            ]);
        Book::create([
            'title' => 'Dormir en un mar de estrellas',
            'description' =>'Para dormir en un mar de estrellas es un libro de ciencia ficción escrito por Christopher Paolini y publicado bajo el sello Tor de Macmillan Publishers.',
            'summary' => 'LA NUEVA NOVELA DE CHRISTOPHER PAOLINI, EL AUTOR BEST SELLER DE ERAGON. El espacio alberga incontables secretos. Y Kira Navárez ha encontrado el más letal.Ella siempre ha soñado con encontrar vida en otros planetas. Pero nunca pensó que enfrentaría a un enemigo que pondrá en riesgo a toda la humanidad. Durante una misión de reconocimiento rutinaria en un planeta sin colonizar, Kira descubre una reliquia alienígena. Su euforia no tarda en transformarse en terror cuando el antiquísimo polvo que la rodea empieza a... moverse.En mitad de una guerra interestelar, Kira se verá empujada a una odisea de descubrimiento y transformación de dimensiones galácticas. El primer contacto con los alienígenas ha sido totalmente distinto de lo que ella esperaba, y los acontecimientos la obligarán a poner a prueba los límites de lo que significa ser humano. Mientras Kira afronta sus propios horrores, la Tierra y sus colonias se debaten al borde de la aniquilación. Es posible que Kira sea la mayor esperanza de la humanidad, y también la última...',
            ]);
        Book::create([
            'title' => 'El tenedor, la hechicera y el dragón',
            'description' =>'Ha pasado un año desde que Eragon partió de Alagaësia en busca del hogar perfecto para entrenar a una nueva generación de Jinetes de Dragón.',
            'summary' => 'Ha pasado un año desde que Eragon partió de Alagaësia en busca del hogar perfecto para entrenar a una nueva generación de Jinetes de Dragón. Ahora debe de hacer frente a un mar de tareas que parecen no tener fin: construir un enorme refugio para dragones, lidiar con proveedores, custodiar huevos de dragón y enfrentarse con úrgalos beligerantes y elfos arrogantes. Pero ahora, una visión de los eldunarí, trae consigo visitas inesperadas; una extraordinaria leyenda úrgala, que aportará una distracción más que necesaria, así como una nueva perspectiva a la vida de Eragon.

            Este volumen incluye tres maravillosas historias originales del mundo de Alagaësia, entremezcladas con escenas de las propias aventuras deEragon. Incluye también un extracto de la inolvidable hechicera Angela la herbolaria, escrita por Angela Paolini, un personaje inspirado en ella misma.',
            ]);

        }
}
