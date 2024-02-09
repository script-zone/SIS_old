function verificarIdade(dataNascimento) {
    // Dividir a string da data de nascimento em dia, mês e ano
    const partes = dataNascimento.split("/");
    const dia = parseInt(partes[0], 10);
    const mes = parseInt(partes[1], 10);
    const ano = parseInt(partes[2], 10);

    // Criar um objeto Date com a data de nascimento
    const dataNasc = new Date(ano, mes - 1, dia);

    // Calcular a idade atual
    const hoje = new Date();
    const idade = hoje.getFullYear() - dataNasc.getFullYear();

    // Verificar se a pessoa tem mais de 18 anos e menos de 90 anos
    if (idade >= 18 && idade < 90) {
        return true; // A pessoa está dentro da faixa etária desejada
    } else {
        return false; // A pessoa não está dentro da faixa etária desejada
    }
}
