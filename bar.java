import java.util.*;
class Solution
{
	public static void main(String[] args) {
		Scanner sc=new Scanner(System.in);
		// System.out.println("size");
		int x=sc.nextInt();
		int []a =new int[x];
		for(int i=0;i<x;i++)
		{
			a[i]=sc.nextInt();
		}
		
		int count1=0;
		int count2=0;
		for(int i=0;i<x;i++)
			{
				int sum=0;
				for(int j=i-1;j>0;j--)
				{
					sum=sum+a[i]+a[j];
					if(sum<0) count1++;

				}
				sum=0;
				for(int j=i+1;j<x;j++)
				{
					sum=sum+a[j];
					if(sum<0) count1++;
				}	
			}
	
		for(int i=0;i<x;i++)
		{
			if(a[i]<0) count2=count2+1;
			
		}
		System.out.println(count1+count2);
	}
}