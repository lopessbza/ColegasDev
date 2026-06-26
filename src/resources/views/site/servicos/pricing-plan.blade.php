<div class="pricing-plan__one section-padding">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-xl-6 col-lg-7 col-md-8">
                <div class="pricing-plan__one-title">
                    <span class="subtitle-one">Planos flexíveis</span>
                    <h2 class="mb-40">Preços simplificados</h2>
                    <ul class="nav nav-pills mb-65 justify-content-center" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="monthly-pricing-tab" data-bs-toggle="pill" data-bs-target="#monthly-pricing" type="button" role="tab" aria-controls="monthly-pricing" aria-selected="true">Mensal</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="yearly-pricing-tab" data-bs-toggle="pill" data-bs-target="#yearly-pricing" type="button" role="tab" aria-controls="yearly-pricing" aria-selected="false">Anual</button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="pricing-plans tab-content">

            {{-- ================= TAB MENSAL ================= --}}
            <div class="row justify-content-center gy-4 tab-pane fade show active" id="monthly-pricing" role="tabpanel" aria-labelledby="monthly-pricing-tab">
                @foreach($planos as $plano)
                @php
                $precoMensal = $plano->precos->where('tipo_periodo_preco', 'mensal')->first();
                @endphp
                <div class="col-xl-4 col-lg-4 col-md-6 d-flex">
                    <div class="pricing-plan__one-single-pricing-wrapper w-100 d-flex">
                        {{-- h-100 garante altura igual, flex-column e justify-content-between alinham o conteúdo e o botão --}}
                        <div class="pricing-plan__one-single-pricing-plan h-100 w-100 d-flex flex-column justify-content-between {{ $plano->id_plano == 2 ? 'active' : '' }}">
                            <div>
                                <h3 class="pricing-plan__one-single-pricing-plan-title">{{ $plano->nome_plano }}</h3>
                                <h2 class="pricing-plan__one-single-pricing-plan-price">
                                    R$ {{ $precoMensal ? number_format($precoMensal->valor_preco, 2, ',', '.') : '0,00' }}
                                    <span>/mês</span>
                                </h2>
                                <p>{{ utf8_decode($plano->descricao_plano) }}</p>

                                <div class="pricing-plan__one-single-pricing-plan-benefits">
                                    @if($plano->id_plano == 3)
                                    <span><i class="fas fa-angle-double-right"></i> Front End</span>
                                    <span><i class="fas fa-angle-double-right"></i> Back End</span>
                                    <span><i class="fas fa-angle-double-right"></i> E2E</span>
                                    @else
                                    @foreach($plano->servicos->slice(0, 3) as $servico)
                                    <span>
                                        <i class="fas fa-angle-double-right"></i>
                                        {{ utf8_decode($servico->nome_servico) }}
                                    </span>
                                    @endforeach
                                    @endif
                                </div>
                            </div>
                            <div class="mt-4">
                                <a href="contato" class="btn-one w-100 text-center"> Comece <i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            {{-- ================= TAB ANUAL ================= --}}
            <div class="row justify-content-center gy-4 tab-pane fade" id="yearly-pricing" role="tabpanel" aria-labelledby="yearly-pricing-tab">
                @foreach($planos as $plano)
                @php
                $precoAnual = $plano->precos->where('tipo_periodo_preco', 'anual')->first();
                @endphp
                <div class="col-xl-4 col-lg-4 col-md-6 d-flex">
                    <div class="pricing-plan__one-single-pricing-wrapper w-100 d-flex">
                        <div class="pricing-plan__one-single-pricing-plan h-100 w-100 d-flex flex-column justify-content-between {{ $plano->id_plano == 2 ? 'active' : '' }}">
                            <div>
                                <h3 class="pricing-plan__one-single-pricing-plan-title">{{ $plano->nome_plano }}</h3>
                                <h2 class="pricing-plan__one-single-pricing-plan-price">
                                    R$ {{ $precoAnual ? number_format($precoAnual->valor_preco, 2, ',', '.') : '0,00' }}
                                    <span>/ano</span>
                                </h2>
                                <p>{{ utf8_decode($plano->descricao_plano) }}</p>

                                <div class="pricing-plan__one-single-pricing-plan-benefits">
                                    @if($plano->id_plano == 3)
                                    <span><i class="fas fa-angle-double-right"></i> Front End</span>
                                    <span><i class="fas fa-angle-double-right"></i> Back End</span>
                                    <span><i class="fas fa-angle-double-right"></i> E2E</span>
                                    @else
                                    @foreach($plano->servicos->slice(0, 3) as $servico)
                                    <span>
                                        <i class="fas fa-angle-double-right"></i>
                                        {{ utf8_decode($servico->nome_servico) }}
                                    </span>
                                    @endforeach
                                    @endif
                                </div>
                            </div>
                            <div class="mt-4">
                                <a href="contato" class="btn-one w-100 text-center"> Comece <i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </div>
</div>