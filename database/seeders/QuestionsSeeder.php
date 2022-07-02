<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuestionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
          ['name' => 'Рандомные факты'],
          ['name' => 'Музыка'],
          ['name' => 'Фильмы, сериалы и аниме'],
        ];

        foreach ($categories as $category){
            \DB::table('categories')->insert([$category]);
        }

        $questions = [
            ['category_id' => '1', 'description' => 'Мой день рождения',
                'answer' => '19.06.2000', 'price' => '100'],
            ['category_id' => '1', 'description' => 'Сколько у меня часов в компьютерной игре Dota 2? +-500',
                'answer' => '5885', 'price' => '200'],
            ['category_id' => '1', 'description' => 'У какой девочки я первый раз увидел сисечки?',
                'answer' => 'Анюта Белова', 'price' => '500'],
            ['category_id' => '1', 'description' => 'Кто не поздравил меня с др 19.06.2022(именно в этот день)',
                'answer' => 'Юля Васенёва', 'price' => '1000'],
            ['category_id' => '1', 'description' => 'Специальность, которую я закончил в поликеке',
                'answer' => 'Информационные системы и технологии', 'price' => '100'],
            ['category_id' => '1', 'description' => 'Мои любимые чипсы',
                'answer' => 'Lays Рифленые сметана и лук', 'price' => '200'],


            ['category_id' => '2', 'description' => 'Сколько аудиозаписей у меня на страничке во вконтакте +-50',
                'answer' => '585', 'price' => '100'],
            ['category_id' => '2', 'description' => 'Мой любимый пиндосский исполнитель(реп читает)',
                'answer' => 'lil skies', 'price' => '200'],
            ['category_id' => '2', 'description' => 'Мой любимый русский исполнитель(реп читает), тут 2 ответа, надо отгадать хотя бы 1',
                'answer' => 'Дуло\бейби', 'price' => '500'],
            ['category_id' => '2', 'description' => 'Угадайте хотя бы 1 из трёх моих любимых русских девочек певиц, если угадаете всех трёх, то +1 балл',
                'answer' => 'Дора, мейби бейби, максим', 'price' => '1000'],

            ['category_id' => '3', 'description' => 'Мой любимый фильм из марвел(смотрел в кинотеатре)',
                'answer' => 'Тор: Рагнарёк', 'price' => '100'],
            ['category_id' => '3', 'description' => 'Назовите фамилию у персонажа сериала, с именем Никлаус',
                'answer' => 'Майклсон', 'price' => '200'],
            ['category_id' => '3', 'description' => 'Единственный аниме фильм, который я смотрел',
                'answer' => 'Ходячий замок', 'price' => '500'],
            ['category_id' => '3', 'description' => 'Чьё имя зашифровано? Я — ****, и я обращаюсь ко всем выжившим Автоботам, укрывшимся среди звёзд. Мы здесь. Мы ждём.',
                'answer' => 'Оптимус Прайм', 'price' => '1000'],
        ];

        foreach ($questions as $question){
            \DB::table('questions')->insert([$question]);
        }
    }
}
