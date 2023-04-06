<?php

namespace Database\Seeders;

use DateTime;
use DateTimeImmutable;
use DateTimeInterface;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsSeed extends Seeder
{

    public function run(): void
    {
        DB::table('news')->insert($this->getNews());

    }

    private function getNews()
    {
        $data = [];

        for($i=1;$i<5;$i++) {
            $data[] = [
                'name' => 'Ньютон, Исаак',
                'short_description' => 'Сэр Исаа́к Нью́то́н[K 1] (англ. Isaac Newton, английское произношение: [ˌaɪzək ˈnjuːtən]; 25 декабря 1642 года — 20 марта 1727 года по юлианскому календарю, действовавшему в Англии до 1752 года; или 4 января 1643 года — 31 марта 1727 года по григорианскому календарю) — английский физик, математик, механик и астроном, один из создателей классической физики и математического анализа.',
                'full_description' => 'Автор фундаментального труда «Математические начала натуральной философии», в котором он обнародовал законы движения и закон всемирного тяготения, сформировавшие господствующую научную точку зрения вплоть до появления общей теории относительности[⇨]. Ньютон использовал свое математическое описание гравитации для строгого вывода эмпирических кеплеровских законов движения планет, а также для построения научной теории приливов, прецессии равноденствий и других явлений. Труд Ньютона устранил всякие сомнения в гелиоцентричности Солнечной системы и продемонстрировал, что движение объектов на Земле и небесных тел можно объяснить одними и теми же физическими принципами. Вывод Ньютона о том, что Земля представляет собой сплюснутый сфероид, впоследствии был подтвержден геодезическими измерениями Мопертюи, ла Кондамина и других, убедивших большинство европейских ученых в превосходстве ньютоновской механики над более ранними системами',
                'url_img' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/3/39/GodfreyKneller-IsaacNewton-1689.jpg/800px-GodfreyKneller-IsaacNewton-1689.jpg',
                'create_date' => (new DateTime())->format(DateTimeInterface::ATOM),
                'update_date' => (new DateTime())->format(DateTimeInterface::ATOM),
                'id_category' => 1,
                'id_source' => 1
            ];
        }

        return $data;
    }
}
