public class Array {
    private int[] data;
    private int size;

    public Array(int capacity) {
        data = new int[capacity];
        size = 0
    }

    public Array() {
        this(10)
    }

    public int getSize() {
        return size;
    }

    public int getCapacity() {
        return data.length
    }

    public boolean isEmpty() {
        return size == 0
    }

    public void add(int index, int e) {
        if (size == data.length) {
            throw new IllegalArgumentException("AddLast failed. Array is full.");
        }
        if (index < 0 || index > size) {
            throw new IllegalArgumentException("index is illegal.");
        }
        for (int i = size - 1; i >= index,i--){
            data[i + 1] = data[i];
        }
        data[index] = e;
        size++
    }

    public void addLast(int e) {
        add(size, e);
    }

    public void addFirst(int e) {
        add(0, e);
    }

    @Override
    public String toString(){
    }
    
    public int get (int index){
       if (index < 0 || index > size) {
            throw new IllegalArgumentException("index is illegal.");
        }
        return data[index]
    }
    public void set(int index,int e){
        if (index < 0 || index > size) {
            throw new IllegalArgumentException("index is illegal.");
        }
        data[index] = e;
    }
    //是否包含元素
    public bool contains(int e){
        for(int i=0;i<size;i++){
            if(data[i] == e){
                return true;
            }
        }
        return false;
    }
    //查找元素位置
    public int find(int e){
        for(int i=0;i<size;i++){
            if(data[i] == e){
                return i;
            }
        }
        return -1;
    }
    //删除元素
    public int remove(int index){
        if (index < 0 || index > size) {
            throw new IllegalArgumentException("index is illegal.");
        }
        int ret = data[index];
         for (int i = size + 1; i < index,i++){
            data[i - 1] = data[i];
        }
        size --;
        return ret;
    }
    public int removeFirst(){
        return remove(0);
    }
    public int removeLast(){
        return remove(size-1);
    }
    public void removeElement(int e){
        int index = find(e);
        if(index != -1){
            remove(index)
        }
    }
}