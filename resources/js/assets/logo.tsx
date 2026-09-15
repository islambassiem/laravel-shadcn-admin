import { cn } from '@/lib/utils';
import { type ImgHTMLAttributes } from 'react';

export function Logo({ className, ...props }: ImgHTMLAttributes<HTMLImageElement>) {
    return <img src="/images/logo.png" className={cn(className)} {...props} />;
}
