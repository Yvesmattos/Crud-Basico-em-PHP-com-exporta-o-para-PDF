<?php
require 'models/jog.class.php';
require 'config/pdf.php';

class JogosController
{

    public function index()
    {
        $jogo = new Jogo;
        $jogos = $jogo->findAll();
        return include_once "views/cadastroJogos.php";
    }

    public function cadastrarJogo($req)
    {
        $nome = isset($req['nome']) ? $req['nome'] : null;
        $genero = isset($req['genero']) ? $req['genero'] : null;
        $plataforma = isset($req['plataforma']) ? $req['plataforma'] : null;
        $jogabilidade = isset($req['jogabilidade']) ? $req['jogabilidade'] : null;
        $midia = isset($req['midia']) ? $req['midia'] : null;

        $jogo = new Jogo();
        $dados = array(
            "nome" => $nome,
            "genero" => $genero,
            "plataforma" => $plataforma,
            "jogabilidade" => $jogabilidade,
            "midia" => $midia
        );

        if ($jogo->cadastrarDados($dados)) {
            echo
                "<script>
                    alert('Jogo incluído com sucesso');
                    window.location.href='index.php';
                </script>";
        }
    }

    public function deletarJogo($idjogos)
    {
        $jogo = new Jogo();

        if ($jogo = $jogo->destroy($idjogos)) {
            echo
                "<script>
                    alert('Jogo deletado com sucesso');
                    window.location.href='index.php';
                </script>";
        }
    }

    public function buscar($idJogos)
    {
        $jogoInstancia = new Jogo;
        $jogo = $jogoInstancia->find($idJogos);
        $jogos = $jogoInstancia->findAll();

        return include_once "views/cadastroJogos.php";
    }

    public function buscarTodos(){
        $jogoInstancia = new Jogo;
        $jogos = $jogoInstancia->findAll();
    }

    public function alterarJogo($req)
    {

        $idJogos = isset($req['idJogo']) ? $req['idJogo'] : null;
        $nome = isset($req['nome']) ? $req['nome'] : null;
        $genero = isset($req['genero']) ? $req['genero'] : null;
        $plataforma = isset($req['plataforma']) ? $req['plataforma'] : null;
        $jogabilidade = isset($req['jogabilidade']) ? $req['jogabilidade'] : null;
        $midia = isset($req['midia']) ? $req['midia'] : null;

        $jogo = new Jogo();
        $dados = array(
            "id" => $idJogos,
            "nome" => $nome,
            "genero" => $genero,
            "plataforma" => $plataforma,
            "jogabilidade" => $jogabilidade,
            "midia" => $midia
        );
        if ($jogo->alterar($dados)) {
            echo
                "<script>
                    alert('Jogo alterado com sucesso');
                    window.location.href='index.php';
                </script>";
        }
    }
    public function gerarTabela(){
        $jogo = new Jogo;
        $pdf = new PDF('P', 'mm', 'A4');
        $header = array('#Id', 'Nome', 'Genero', 'Plataforma', 'Players', utf8_decode('Mídia'));
        $jogos = $jogo->findAll();

        $pdf->SetFont('Arial','',12);
        $pdf->SetTitle("Relatório de Vendas", $isUTF8 = true);
        $pdf->AddPage();
        $pdf->BasicTable($header,$jogos);
        $pdf->Output("i");
    }
}
