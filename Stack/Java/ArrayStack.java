public class ArrayStack<E> implements Stack<E>{
    private Array<E> Array;

    public ArrayStack(int capacity){
        array = new Array<>(capacity);
    }
    public ArrayStack(){
        array = new Array<>();
    }

    @Override
    public int getSize(){
        return array.getSize();
    }
    @Override
    public boolean isEmpty(){
        return array.isEmpty();
    }
}
