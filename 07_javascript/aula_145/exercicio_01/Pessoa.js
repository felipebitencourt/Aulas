class Pessoa{

    // Atributos Privados - dessa mesma forma, precisa ser criado um atributo que seja privado
    #cartao

    // Construtor e Atributos
    constructor(nome, idade, altura, genero){
        this.nome = nome;
        this.idade = idade;
        this.altura = altura;
        this.genero = genero;
        this.#cartao = 1111;
    }

    //Métodos
    toString(){return `
        <tr>
            <td>${this.nome}</td>
            <td>${this.idade}</td>
            <td>${this.altura.toFixed(2)}</td>
            <td>${this.genero}</td>
        </tr>`;}
    // casou(novo_apelido){this.nome += " " + novo_apelido;}
    // novaaltura(nova_altura){this.altura = nova_altura;}
    // complertarAnos(){this.idade++;}

}