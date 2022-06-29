USE petshop;

CREATE TABLE animais(
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(40) NOT NULL,
    animal CHAR(30) NOT NULL,
    raca VARCHAR(30) NOT NULL,
    cor CHAR(30) NOT NULL,
    cor_olhos CHAR(30) NOT NULL,
    email_dono VARCHAR(50) NOT NULL,
    FOREIGN KEY (email_dono) REFERENCES clientes(email)
);