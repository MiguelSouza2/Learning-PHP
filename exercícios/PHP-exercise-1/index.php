<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cananeia Fish - Peixaria</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <!-- Navegação -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Cananeia Fish</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#produtos">Produtos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contato">Contato</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#carrinho">Carrinho <span class="badge bg-primary" id="cart-count">0</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Seção de Herói -->
    <section class="hero bg-primary text-white text-center py-5">
        <div class="container">
            <h1 class="display-4">Bem-vindo à Cananeia Fish</h1>
            <p class="lead">Os melhores peixes e frutos do mar diretamente de Cananeia para você!</p>
        </div>
    </section>

    <!-- Produtos -->
    <section id="produtos" class="py-5">
        <div class="container">
            <h2 class="text-center mb-5">Nossos Produtos</h2>
            <div class="row">
                <!-- Produto 1 -->
                <div class="col-md-4">
                    <div class="card">
                        <img src="https://via.placeholder.com/350x150" class="card-img-top" alt="Salmão">
                        <div class="card-body">
                            <h5 class="card-title">Salmão Fresco</h5>
                            <p class="card-text">R$ 59,90 / kg</p>
                            <button class="btn btn-primary add-to-cart" data-name="Salmão Fresco" data-price="59.90">Adicionar ao Carrinho</button>
                        </div>
                    </div>
                </div>
                <!-- Produto 2 -->
                <div class="col-md-4">
                    <div class="card">
                        <img src="https://via.placeholder.com/350x150" class="card-img-top" alt="Camarão">
                        <div class="card-body">
                            <h5 class="card-title">Camarão Grande</h5>
                            <p class="card-text">R$ 89,90 / kg</p>
                            <button class="btn btn-primary add-to-cart" data-name="Camarão Grande" data-price="89.90">Adicionar ao Carrinho</button>
                        </div>
                    </div>
                </div>
                <!-- Produto 3 -->
                <div class="col-md-4">
                    <div class="card">
                        <img src="https://via.placeholder.com/350x150" class="card-img-top" alt="Bacalhau">
                        <div class="card-body">
                            <h5 class="card-title">Bacalhau Importado</h5>
                            <p class="card-text">R$ 119,90 / kg</p>
                            <button class="btn btn-primary add-to-cart" data-name="Bacalhau Importado" data-price="119.90">Adicionar ao Carrinho</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Carrinho de Compras -->
    <section id="carrinho" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5">Seu Carrinho</h2>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Produto</th>
                            <th>Preço</th>
                            <th>Quantidade</th>
                            <th>Total</th>
                            <th>Ação</th>
                        </tr>
                    </thead>
                    <tbody id="cart-items">
                        <!-- Os itens do carrinho serão inseridos aqui -->
                    </tbody>
                </table>
            </div>
            <div class="text-end">
                <h4>Total Geral: R$ <span id="cart-total">0.00</span></h4>
                <button class="btn btn-success mt-3" disabled id="checkout-btn">Finalizar Compra</button>
            </div>
        </div>
    </section>

    <!-- Contato -->
    <section id="contato" class="py-5">
        <div class="container">
            <h2 class="text-center mb-5">Fale Conosco</h2>
            <div class="row">
                <div class="col-md-6">
                    <h4>Endereço:</h4>
                    <p>Rua do Mar, 123, Cananeia - SP</p>
                    <h4>Telefone:</h4>
                    <p>(13) 1234-5678</p>
                    <h4>Email:</h4>
                    <p>contato@cananeiafish.com.br</p>
                </div>
                <div class="col-md-6">
                    <form>
                        <div class="mb-3">
                            <label for="nome" class="form-label">Nome</label>
                            <input type="text" class="form-control" id="nome" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="mensagem" class="form-label">Mensagem</label>
                            <textarea class="form-control" id="mensagem" rows="3" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Rodapé -->
    <footer class="bg-dark text-white text-center py-4">
        <p>&copy; 2024 Cananeia Fish. Todos os direitos reservados.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
