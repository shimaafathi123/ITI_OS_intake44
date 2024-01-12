package Exceot;
class ExceptionThrower {
    public void method1() throws MyCustomException {
        throw new MyCustomException("Exception in method1");
    }

    public void method2() throws MyCustomException {
        throw new MyCustomException("Exception in method2");
    }

    public void method3() throws MyCustomException {
        throw new MyCustomException("Exception in method3");
    }
}
