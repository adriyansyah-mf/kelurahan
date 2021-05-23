@php
$links = [
    [
        "href" => "dashboard",
        "text" => "Dashboard",
        "is_multi" => false,
    ],
    [
        "href" => [
            [
                "section_text" => "Kelurahan",
                "section_list" => [
                    ["href" => "kelurahan", "text" => "Data Kelurahan"],
                    ["href" => "kelurahantambah", "text" => "Tambah Data Kelurahan"]
                ]
            ]
        ],
        "text" => "Data Kelurahan",
        "is_multi" => true,
    ],
    [
        "href" => [
            [
                "section_text" => "Data RT",
                "section_list" => [
                    ["href" => "rt", "text" => "Data RT"],
                     ["href" => "rttambah", "text" => "Tambah Data RT"]
                ]
            ]
        ],
        "text" => "Data RT",
        "is_multi" => true,
    ],
    [
        "href" => [
            [
                "section_text" => "Data RW",
                "section_list" => [
                    ["href" => "rw", "text" => "Data RW"],
                     ["href" => "rwtambah", "text" => "Tambah Data RW"]
                ]
            ]
        ],
        "text" => "Data RW",
        "is_multi" => true,
    ],
    [
        "href" => [
            [
                "section_text" => "Data Tamu",
                "section_list" => [
                    ["href" => "tamu", "text" => "Data Tamu"],

                ]
            ]
        ],
        "text" => "Data RW",
        "is_multi" => true,
    ],
    [
        "href" => [
            [
                "section_text" => "Data Warga",
                "section_list" => [
                    ["href" => "warga", "text" => "Data Warga"],

                ]
            ]
        ],
        "text" => "Data RW",
        "is_multi" => true,
    ],
];
$navigation_links = array_to_object($links);
@endphp

<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('dashboard') }}">Dashboard</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ route('dashboard') }}">
                <img class="d-inline-block" width="32px" height="30.61px" src="" alt="">
            </a>
        </div>
        @foreach ($navigation_links as $link)
        <ul class="sidebar-menu">
            <li class="menu-header">{{ $link->text }}</li>
            @if (!$link->is_multi)
            <li class="{{ Request::routeIs($link->href) ? 'active' : '' }}">
                <a class="nav-link" href="{{ route($link->href) }}"><i class="fas fa-fire"></i><span>Dashboard</span></a>
            </li>
            @else
                @foreach ($link->href as $section)
                    @php
                    $routes = collect($section->section_list)->map(function ($child) {
                        return Request::routeIs($child->href);
                    })->toArray();

                    $is_active = in_array(true, $routes);
                    @endphp

                    <li class="dropdown {{ ($is_active) ? 'active' : '' }}">
                        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-chart-bar"></i> <span>{{ $section->section_text }}</span></a>
                        <ul class="dropdown-menu">
                            @foreach ($section->section_list as $child)
                                <li class="{{ Request::routeIs($child->href) ? 'active' : '' }}"><a class="nav-link" href="{{ route($child->href) }}">{{ $child->text }}</a></li>
                            @endforeach
                        </ul>
                    </li>
                @endforeach
            @endif
        </ul>
        @endforeach
    </aside>
</div>
