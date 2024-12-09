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
    toString(){return `Nome: ${this.nome} | Idade: ${this.idade} | Altura: ${this.altura} | Genero: ${this.genero} <br>`;}
    // casou(novo_apelido){this.nome += " " + novo_apelido;}
    // novaaltura(nova_altura){this.altura = nova_altura;}
    // complertarAnos(){this.idade++;}

}