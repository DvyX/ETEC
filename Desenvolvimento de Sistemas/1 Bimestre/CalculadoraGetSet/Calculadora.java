package Calculadora;

import java.util.Scanner;

public class Calculadora {

	Scanner in = new Scanner(System.in);
	
	private double numero1;
	private double numero2;
	private double resultado;
	private String operacao;
	
	public double getNumero1(){
		return numero1;
	}
	
	public void setNumero1(double numero1){
		this.numero1 = numero1;
	}
	
	public String getOperacao(){
		return operacao;
	}
	
	public void setOperacao(String operacao){
		this.operacao = operacao;
	}
	
	public double getNumero2(){
		return numero2;
	}
	
	public void setNumero2(double numero2){
		this.numero2 = numero2;
	}
	
	public double getResultado(){
		return resultado;
	}
	
	public void setResultado(double resultado){
		this.resultado = resultado;
	}
	
	//método que inicia a calculadora, lê os valores e chama o método de cálculo
	public void iniciar() {
		
		System.out.println("Iniciando a calculadora...");
		System.out.println("Por favor, digite o 1º valor:");
		numero1 = in.nextDouble();
		System.out.println("Ok, Agora digite o 2º valor:");
		numero2 = in.nextDouble();
	}
	
	//método que seleciona a operação
	public void selecionarOperacao() {
		System.out.println("Agora, digite a operação desejada: ");
		System.out.println("| / para Divisão | * para Multiplicação | - para Subtração | + para Adição |");
		operacao = in.next();
		switch(operacao){
		
		case("/"):
			dividir();
			break;
		case("*"):
			multiplicar();
			break;
		case("-"):
			subtrair();
			break;
		case("+"):
			somar();
			break;
		default:
			System.out.println("Operação Inválida");
			break;
		}
	}
	
	//método que multiplica 
	public void multiplicar() {
		resultado=numero1*numero2;
		apresentar();
	}
	
	//método que divide
	public void dividir() {
		resultado=numero1/numero2;
		apresentar();
	}
	
	//método que subtrai
	public void subtrair() {
		resultado=numero1-numero2;
		apresentar();
	}
	
	//método que soma
	public void somar() {
		resultado=numero1+numero2;
		apresentar();
	}
	
	//método que apresenta
	public void apresentar() {
		System.out.println("O resultado da operação é: "+resultado);
	}
	
	
}
