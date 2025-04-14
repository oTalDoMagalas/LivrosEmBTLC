<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Página ADM - Biblioteca Escolar</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

<link rel="stylesheet" href="style.css">

</head>

<body class="container py-4">
  <div class="container py-4">
    <!-- Topo -->
    <div class="row mb-4">
      <div class="col-md-12">
        <div class="d-flex justify-content-between align-items-center">
          <h1>Sistema de Biblioteca Escolar 📚</h1>
          <div class="d-flex align-items-center gap-3">
            <i class="bi bi-person-circle fs-4"></i>
            <span>Bem-vindo, <strong>Gustavo Magalas Generoso</strong></span>
            <a href="#" class="btn btn-outline-danger d-flex align-items-center gap-1">
              <i class="bi bi-box-arrow-right"></i> Sair
            </a>
          </div>
        </div>
      </div>
    </div>

    <!-- Formulários -->
    <div class="row same-height-row">
      <!-- Adicionar livro -->
      <div class="col-md-6">
        <div class="card h-100">
          <div class="card-header">
            <h4 class="mb-0">Adicionar novo livro 📖</h4>
          </div>
          <div class="card-body">
            <form method="post" class="needs-validation" novalidate>
              <div class="mb-3">
                <label class="form-label">Título:</label>
                <input type="text" class="form-control" name="titulo" required>
              </div>
              <div class="mb-3">
                <label class="form-label">Autor:</label>
                <input type="text" class="form-control" name="autor" required>
              </div>
              <div class="mb-3">
                <label class="form-label">Ano de Publicação:</label>
                <input type="number" class="form-control" name="ano" required>
              </div>
              <button class="btn btn-success w-100" type="submit" name="adicionar">Cadastrar Livro</button>
            </form>
          </div>
        </div>
      </div>

      <!-- Previsão de devolução -->
      <div class="col-md-6">
        <div class="card h-100">
          <div class="card-header">
            <h4 class="mb-0">Calcular data de devolução 📅</h4>
          </div>
          <div class="card-body">
            <form method="post" class="needs-validation" novalidate>
              <div class="mb-3">
                <label class="form-label">Quantidade de dias de empréstimo:</label>
                <input type="number" class="form-control" name="dias" value="7" required>
              </div>
              <button class="btn btn-primary w-100" type="submit" name="calcular">Calcular</button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- Tabela de livros -->
    <div class="row mt-4">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4 class="mb-0">Livros Cadastrados 📝</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-striped table-hover">
                <thead>
                  <tr>
                    <th>Título</th>
                    <th>Autor</th>
                    <th>Ano</th>
                    <th>Disponibilidade</th>
                    <th>Ações</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Dom Casmurro</td>
                    <td>Machado de Assis</td>
                    <td>1899</td>
                    <td><span class="badge bg-success">Disponível ✅</span></td>
                    <td>
                      <form method="post" class="d-flex gap-2">
                        <button class="btn btn-danger btn-sm" name="deletar">Excluir</button>
                        <input type="number" class="form-control form-control-sm w-25" name="dias" min="1" value="7">
                        <button class="btn btn-primary btn-sm" name="alugar">Alugar</button>
                      </form>
                    </td>
                  </tr>
                  <tr>
                    <td>1984</td>
                    <td>George Orwell</td>
                    <td>1949</td>
                    <td><span class="badge bg-warning">Emprestado ❕</span></td>
                    <td>
                      <form method="post" class="d-flex gap-2">
                        <button class="btn btn-danger btn-sm" name="deletar">Excluir</button>
                        <button class="btn btn-warning btn-sm" name="devolver">Devolver</button>
                      </form>
                    </td>
                  </tr>
                  <tr>
                    <td>A Culpa É das Estrelas</td>
                    <td> John Green</td>
                    <td> 2012</td>
                    <td><span class="badge bg-success">Disponível ✅</span></td>
                    <td>
                      <form method="post" class="d-flex gap-2">
                        <button class="btn btn-danger btn-sm" name="deletar">Excluir</button>
                        <input type="number" class="form-control form-control-sm w-25" name="dias" min="1" value="7">
                        <button class="btn btn-primary btn-sm" name="alugar">Alugar</button>
                      </form>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>
</html>
