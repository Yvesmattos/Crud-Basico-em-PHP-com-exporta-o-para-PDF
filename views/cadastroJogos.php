<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf8mb4_general_ci">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inclusão de dados</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        label {
            color: white;
        }
    </style>
</head>

<body style="background-image: url('assets/wpaper.jpg');">
    <form action="index.php" method="POST">
        <?php
        if (isset($jogo->nome)) {
            echo "<input name='edit' type='hidden'>";
            echo "<input name='idJogo' value='" . $jogo->idjogos . "' type='hidden'>";
        }
        ?>
        <div class="container-sm">
            <h1 style="text-align: center; margin-top: 20px;">Cadastro de Jogos</h1>
            <form>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="nomeJogo">Nome do Jogo</label>
                        <input type="text" class="form-control" id="nomeJogo" name="nome" required value="<?php if (isset($jogo->nome)) {
                                                                                                                echo $jogo->nome;
                                                                                                            } else {
                                                                                                                echo "";
                                                                                                            } ?>">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="genero">Gênero</label>
                        <div class="input-group mb-1">
                            <select class="custom-select" id="genero" name="genero" required>
                                <option value="Battle Royale" <?php if (isset($jogo->genero) && ($jogo->genero == "Battle Royale")) {
                                                                    echo "selected";
                                                                } else {
                                                                    echo "";
                                                                } ?>>Battle Royale</option>
                                <option value="Hack and slash" <?php if (isset($jogo->genero) && ($jogo->genero == "Hack and slash")) {
                                                                    echo "selected";
                                                                } else {
                                                                    echo "";
                                                                } ?>>Hack and slash</option>
                                <option value="MOBA" <?php if (isset($jogo->genero) && ($jogo->genero == "MOBA")) {
                                                            echo "selected";
                                                        } else {
                                                            echo "";
                                                        } ?>>MOBA</option>
                                <option value="RPG" <?php if (isset($jogo->genero) && ($jogo->genero == "RPG")) {
                                                        echo "selected";
                                                    } else {
                                                        echo "";
                                                    } ?>>RPG</option>
                                <option value="Shooter" <?php if (isset($jogo->genero) && ($jogo->genero == "Shooter")) {
                                                            echo "selected";
                                                        } else {
                                                            echo "";
                                                        } ?>>Shooter</option>
                                <option value="Sports" <?php if (isset($jogo->genero) && ($jogo->genero == "Sports")) {
                                                            echo "selected";
                                                        } else {
                                                            echo "";
                                                        } ?>>Sports</option>
                                <option value="Zombie" <?php if (isset($jogo->genero) && ($jogo->genero == "Zombie")) {
                                                            echo "selected";
                                                        } else {
                                                            echo "";
                                                        } ?>>Zombie</option>
                                <option value="Racer" <?php if (isset($jogo->genero) && ($jogo->genero == "Racer")) {
                                                            echo "selected";
                                                        } else {
                                                            echo "";
                                                        } ?>>Racer</option>
                                <option value="Strategy" <?php if (isset($jogo->genero) && ($jogo->genero == "Strategy")) {
                                                                echo "selected";
                                                            } else {
                                                                echo "";
                                                            } ?>>Strategy</option>
                                <option value="Outro" <?php if (isset($jogo->genero) && ($jogo->genero == "Outro")) {
                                                            echo "selected";
                                                        } else {
                                                            echo "";
                                                        } ?>>Outro</option>
                            </select>
                            <div class="input-group-append">
                                <label class="input-group-text" for="inputGroupSelect02">Opções</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="plataforma">Plataforma</label>
                        <div class="input-group mb-3">
                            <select class="custom-select" id="plataforma" name="plataforma" required>
                                <option value="Console" <?php if (isset($jogo->plataforma) && ($jogo->plataforma == "Console")) {
                                                            echo "selected";
                                                        } else {
                                                            echo "";
                                                        } ?>>Console</option>
                                <option value="PC" <?php if (isset($jogo->plataforma) && ($jogo->plataforma == "PC")) {
                                                        echo "selected";
                                                    } else {
                                                        echo "";
                                                    } ?>>PC</option>
                            </select>
                            <div class="input-group-append">
                                <label class="input-group-text" for="inputGroupSelect02">Opções</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="jogabilidade">Jogabilidade</label>
                        <div class="input-group mb-3">
                            <select class="custom-select" id="jogabilidade" name="jogabilidade" required>
                                <option value="single" <?php if (isset($jogo->players) && ($jogo->players == "single")) {
                                                            echo "selected";
                                                        } else {
                                                            echo "";
                                                        } ?>>Single</option>
                                <option value="multi" <?php if (isset($jogo->players) && ($jogo->players == "multi")) {
                                                            echo "selected";
                                                        } else {
                                                            echo "";
                                                        } ?>>Multi</option>
                            </select>
                            <div class="input-group-append">
                                <label class="input-group-text" for="inputGroupSelect02">Opções</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="midia">Mídia</label>
                        <div class="input-group mb-3">
                            <select class="custom-select" id="midia" name="midia" required>
                                <option value="digital" <?php if (isset($jogo->midia) && ($jogo->midia == "digital")) {
                                                            echo "selected";
                                                        } else {
                                                            echo "";
                                                        } ?>>Digital</option>
                                <option value="fisica" <?php if (isset($jogo->midia) && ($jogo->midia == "fisica")) {
                                                            echo "selected";
                                                        } else {
                                                            echo "";
                                                        } ?>>Física</option>
                            </select>
                            <div class="input-group-append">
                                <label class="input-group-text" for="inputGroupSelect02">Opções</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="midia">&nbsp;</label>
                        <div class="input-group mb-3">
                            <button type="reset" class="btn btn-danger">Limpar</button>
                            <button style="margin-left: 10px;" type="submit" class="btn btn-primary">Salvar</button>
                        </div>
                    </div>
                </div>
            </form>
            <table class="table table-dark">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Genero</th>
                        <th scope="col">Plataforma</th>
                        <th scope="col">Jogabilidade</th>
                        <th scope="col">Mídia</th>
                        <th scope="col">&nbsp;</th>
                        <th scope="col">&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (!empty($jogos))
                        foreach ($jogos as $jogo) { ?>
                        <tr>
                            <td><?php echo $jogo->idjogos; ?></td>
                            <td><?php echo $jogo->nome; ?></td>
                            <td><?php echo $jogo->genero; ?></td>
                            <td><?php echo $jogo->plataforma; ?></td>
                            <td><?php echo $jogo->players; ?></td>
                            <td><?php echo $jogo->midia; ?></td>
                            <td><?php echo "<button style='margin-left: 10px;' type='button' class='btn btn-primary' onclick='carregarDados($jogo->idjogos)' >Alterar</button>"; ?></td>
                            <td><?php echo "<button type='button' class='btn btn-danger' onclick='validarExclusao($jogo->idjogos)' >Excluir</button>"; ?></td>
                        </tr>
                    <?php } ?>

                </tbody>
            </table>
        </div>
        <div class="container-sm">
                <button style="margin-bottom:20px" type="button" class="btn btn-primary btn-lg btn-block" onclick="gerarPdf()">Gerar relatório</button>
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script>
            function validarExclusao(idjogos) {
                if (window.confirm("Confirma a exclusão?")) {
                    window.location.href = "index.php?excluir=true&JogoId=" + idjogos;
                }
            }

            function carregarDados(idjogos) {
                window.location.href = "index.php?edit=true&JogoId=" + idjogos;
            }

            function gerarPdf() {
                window.location.href = "index.php?gerarRelatorio=true";
            }
        </script>
</body>

</html>