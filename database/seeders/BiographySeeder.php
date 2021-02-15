<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Biography;


class BiographySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('biographys')->truncate();

        Biography::create([
            'title' => '¿Quién es?',
            'body' => 'Nació en el sur de California el 17 de noviembre de 1983, a pesar de que muchos medios siempre sitúan su nacimiento en el estado de Montana, donde realmente reside con su familia en una preciosa región montañosa llamada «Paradise Valley». Terminó la secundaria a los 15 años a través del sistema de estudio a distancia, Homeschooling. Nada más terminar sus estudios, se puso a escribir Eragon como un hobby para matar el tiempo libre.',
            'order' => '0',
        ]);

        Biography::create([
            'title' => 'Autor de Eragon con 15 años',
            'body' => 'Su familia confió en él, los padres descubrieron el potencial que tenían, y con todo el esfuerzo familiar, junto con los ahorros de toda la vida, invirtieron en crear una edición familiar y casera del libro que escribió Christopher Paolini: Eragon. El libro que al final costó de arrancar en ventas, comenzaría a obtener beneficios en al venta en escuelas, de las que el escritor siendo adolescente vendía de instituto en instituto con una presentación sobre la importancia de la literatura.',
            'order' => '1',
        ]);
    
        Biography::create([
            'title' => 'Todo un devorador de libros',
            'body' => 'Desde su juventud se nutrió de todo tipos de libros siempre destacando la ciencia ficción. Más de 4.000 libros han pasado por sus manos, desde la trilogía de His Dark Materials por Philip Pullman; Dune, por Frank Herbert; Magician, por Raymond E. Feist; The Wizard of Earthsea Trilogy, por Ursula K. Le Guin; The Hobbit, por Tolkien; Mossflower, por Brian Jacques; y Anna Karenina, por Leo Tolstoy. Así como otros títulos de los que ha estado disfrutando como la serie de The No. 1 Ladies’ Detective Agency series, por Alexander McCall Smith y de Baroque Cycle, por Neal Stephenson. El escritor amaba la lectura, entre otras cosas, por que la señal de televisión no llegaba en su hogar, justo al lado del río Yellowstone.',
            'order' => '2',
        ]);   
    }
}
