class Pessoa{

    // Atributos Privados
    #cartao //dessa mesma forma, precisa ser criado um atributo que seja privado

    // Construtor e Atributos
    constructor(nome, idade, morada){
        this.nome = nome;
        this.idade = idade;
        this.morada = morada;
        this.#cartao = 1111;
    }

    //Métodos
    complertarAnos(){
        this.idade++;
    }

    toString(){
        return `Nome: ${this.nome} | Idade: ${this.idade} | Morada: ${this.morada}.`;
    }

    novaMorada(nova_morada){
        this.morada = nova_morada;
    }

    casou(novo_apelido){
        this.nome += " " + novo_apelido;
    }

}