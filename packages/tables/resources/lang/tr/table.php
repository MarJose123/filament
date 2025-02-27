<?php

return [

    'fields' => [

        'search_query' => [
            'label' => 'Ara',
            'placeholder' => 'Ara',
        ],

    ],

    'pagination' => [

        'label' => 'Sayfalandırma Navigasyonu',

        'overview' => 'Toplam :total sonuçtan :first ile :last arası görüntüleniyor',

        'fields' => [

            'records_per_page' => [
                'label' => 'sayfa başına',
            ],

        ],

        'buttons' => [

            'go_to_page' => [
                'label' => ':page sayfasına git',
            ],

            'next' => [
                'label' => 'Sonraki',
            ],

            'previous' => [
                'label' => 'Önceki',
            ],

        ],

    ],

    'buttons' => [

        'filter' => [
            'label' => 'Filtrele',
        ],

        'open_actions' => [
            'label' => 'Eylemleri aç',
        ],

        'toggle_columns' => [
            'label' => 'Sütunları göster/gizle',
        ],

    ],

    'actions' => [

        'replicate' => [

            'label' => 'Çoğalt',

            'messages' => [
                'replicated' => 'Kayıt çoğaltıldı',
            ],

        ],

    ],

    'empty' => [
        'heading' => 'Kayıt bulunamadı',
    ],

    'filters' => [

        'buttons' => [

            'reset' => [
                'label' => 'Filtrelemeyi sıfırla',
            ],

            'close' => [
                'label' => 'Kapat',
            ],

        ],

        'multi_select' => [
            'placeholder' => 'Tümü',
        ],

        'select' => [
            'placeholder' => 'Tümü',
        ],

    ],

    'selection_indicator' => [

        'selected_count' => '{1} 1 kayıt seçildi.|[2,*] :count kayıt seçildi.',

        'buttons' => [

            'select_all' => [
                'label' => 'Tüm :count kaydı seç',
            ],

            'deselect_all' => [
                'label' => 'Tüm seçimleri kaldır',
            ],

        ],

    ],

];
