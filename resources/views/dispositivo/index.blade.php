@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <h1 class="m-0 fw-bold">{{ $canal->c_nombre }}</h1>
                <ul>
                    <li>Autor: {{ $canal->id_user_create }}</li>
                    <li>Estado visibilidad: {{ $canal->c_estado_vista }}</li>
                    <li>Fecha creación: {{ $canal->created_at }}</li>
                    <li>Fecha actualización: {{ $canal->updated_at }}</li>
                </ul>
                <a class="btn btn-info mb-3" href="#" data-toggle="modal" data-target="#modalDispositivo">Agregar
                    dispositivo</a>
                <br>
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-toggle="tab" data-target="#home" type="button"
                            role="tab" aria-controls="home" aria-selected="true">Inicio</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="profile-tab" data-toggle="tab" data-target="#dispositivos"
                            type="button" role="tab" aria-controls="profile"
                            aria-selected="false">Dispositivos</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="contact-tab" data-toggle="tab" data-target="#export-data"
                            type="button" role="tab" aria-controls="contact" aria-selected="false">Exportar
                            datos</button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="row">
                            @foreach ($dispositivos as $item)
                                <div class="col-md-6 mt-2">
                                    <div class="card direct-chat direct-chat-primary">
                                        <div class="card-header">
                                            <h3 class="card-title">{{ $item->d_nombre }}</h3>
                                            <div class="card-tools">
                                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                    <i class="fas fa-minus"></i>
                                                </button>
                                                <button type="button" class="btn btn-tool" data-card-widget="remove">
                                                    <i class="fas fa-times"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <!-- /.card-header -->
                                        <div class="card-body">
                                            <div class="chart{{ $item->d_key }}"
                                                id="chart{{ $item->d_key }}"></div>
                                            <script>
                                                var valoresSensores = [];
                                                var fechasRegistro = [];

                                                @foreach ($item->datos->sortByDesc('created_at')->slice(0, 30)->reverse() as $dato)
                                                    valoresSensores.push({{ $dato->da_valor }});
                                                    fechasRegistro.push('{{ $dato->created_at->format('H:i') }}');
                                                @endforeach

                                                console.log(valoresSensores);

                                                Highcharts.chart('chart{{ $item->d_key }}', {
                                                    title: {
                                                        text: '{{ $item->d_nombre }}',
                                                        align: 'left'
                                                    },
                                                    subtitle: {
                                                        text: 'Parámetros enviados desde el cultivo ESP32 Fertirriego',
                                                        align: 'left'
                                                    },
                                                    yAxis: {
                                                        title: {
                                                            text: 'Valor de sensor'
                                                        }
                                                    },
                                                    xAxis: {
                                                        type: 'datetime',
                                                        title: {
                                                            text: 'Hora de registro'
                                                        },
                                                        categories: fechasRegistro,
                                                        labels: {
                                                            rotation: 0, // Rotar las etiquetas para mejor legibilidad
                                                            step: 2, // Mostrar cada 2da etiqueta para evitar superposiciones
                                                        }
                                                    },
                                                    legend: {
                                                        layout: 'vertical',
                                                        align: 'right',
                                                        verticalAlign: 'middle'
                                                    },
                                                    plotOptions: {
                                                        series: {
                                                            label: {
                                                                connectorAllowed: false
                                                            }
                                                        }
                                                    },
                                                    series: [{
                                                        name: '{{ $item->d_nombre }}',
                                                        data: valoresSensores
                                                    }],
                                                    responsive: {
                                                        rules: [{
                                                            condition: {
                                                                maxWidth: 500
                                                            },
                                                            chartOptions: {
                                                                legend: {
                                                                    layout: 'horizontal',
                                                                    align: 'center',
                                                                    verticalAlign: 'bottom'
                                                                }
                                                            }
                                                        }]
                                                    }
                                                });
                                            </script>

                                        </div>
                                        <!-- /.card-body -->
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="tab-pane fade" id="dispositivos" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="row">
                            @foreach ($dispositivos as $item)
                                <div class="col-md-6 mt-2">
                                    <div class="card card-primary">
                                        <div class="card-header">
                                            <h3 class="card-title">{{ $item->d_nombre }}</h3>
                                            <div class="card-tools">
                                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                    <i class="fas fa-minus"></i>
                                                </button>
                                                <button type="button" class="btn btn-tool" data-toggle="modal"
                                                    data-target="#modalDispositivoEliminar">
                                                    <i class="fas fa-times"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <p>Key Connect: {{ $item->d_key }}</p>
                                            <p>Fecha registro: {{ $item->created_at }}</p>
                                            <p>Fecha ultima actualización: {{ $item->updated_at }}</p>
                                            <a class="btn btn-primary" href="#">Ver datos</a>
                                        </div>
                                        <!-- /.card-body -->
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="tab-pane fade" id="export-data" role="tabpanel" aria-labelledby="contact-tab">
                        @foreach ($dispositivos as $item)
                        <a href="{{route('export', $item->id)}}" class="btn btn-success mt-3">Exportar a Excel - {{$item->d_nombre}}</a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('dispositivo.moda_dispositivo_registro')
    @include('dispositivo.modal_dispositivo_eliminar')
@endsection
