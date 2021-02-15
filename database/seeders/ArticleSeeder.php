<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->truncate();

        Article::create([
            'title' => 'La sospecha',
            'body' => 'Érase una vez un leñador el cual un día se dio cuenta que no tenía su hacha. Sorprendido y con lágrimas en los ojos, se encontró cerca de su casa al vecino, quien como siempre lo hacía le saludó sonriente y amablemente.
            Mientras éste entraba en su casa, el leñador de repente empezó a sospechar y pensar que tal vez hubiese sido el vecino quien le había robado el hacha. De hecho, ahora que lo pensaba bien su sonrisa parecía nerviosa, tenía una mirada extraña e incluso hubiese dicho que le temblaban las manos. Bien pensado, el vecino tenía la misma expresión que un ladrón, caminaba como un ladrón y hablaba como un ladrón.
            Todo ello iba pensando el leñador, cada vez más convencido de haber encontrado al culpable del hurto, cuando de repente se dió cuenta de que sus pasos le habían llevado de nuevo al bosque donde había estado la noche anterior.
            De pronto, tropezó con algo duro y cayó. Cuando miró al suelo...encontró su hacha! El leñador volvió de nuevo a su hogar con el hacha, arrepentido de sus sospechas, y cuando vio de nuevo a su vecino vio que su expresión, andar y manera de hablar eran (y habían sido en todo momento) las de siempre.”
            Esta historia corta, la cual forma parte de muchas tradiciones pero al parecer tiene su origen en China, nos sirve para aprender que a veces nuestros pensamientos y sospechas nos hacen tener percepciones distorsionadas de la realidad, pudiendo llegar a malinterpretar situaciones y personas con gran facilidad. También nos enseña a no acusar a alguien gratuitamente hasta tener pruebas reales de aquello de lo que le acusamos.',
        ]);

        Article::create([
            'title' => 'El maestro zen',
            'body' => 'Érase una vez, durante una guerra civil en la época feudal, un pequeño poblado en el que vivía un maestro zen. Un día, llegó a ellos la noticia de que un temible general se dirigía en su dirección para invadir y tomar la zona. El día anterior a la llegada del ejército toda la aldea huyó, con la excepción del anciano maestro. Cuando llegó el general, tras encontrar la aldea prácticamente desierta y sabiendo de la existencia del anciano, ordenó que el maestro zen se personase ante él, pero este no lo hizo.
            El general se dirigió rápidamente hacia el templo donde el maestro descansaba. Furioso, el general sacó su espada y se la acercó a la cara, gritándole que si no se daba cuenta de que estaba simplemente parado delante de quien podría atravesarle en un instante. Con total tranquilidad, el anciano maestro le contestó que precisamente el general estaba ante alguien que podía ser atravesado en un instante. El general, sorprendido y confuso, terminó haciéndole una reverencia y marchándose del lugar.”
            Esta historia corta refleja la cualidad del autocontrol emocional y el valor de tener la capacidad de mantenerse sereno en cualquier circunstancia. La cuestión es que cualquier cosa puede pasarnos en cualquier momento, y perturbarnos ante ello no nos conduce a nada.',
        ]);
    }
}
